<?php

namespace iio\libmergepdf;

class MergerTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @expectedException iio\libmergepdf\Exception
     */
    public function testUnableToCreateTempFileError()
    {
        $m = $this->getMockBuilder('\iio\libmergepdf\Merger')
            ->setMethods(array('getTempFname'))
            ->getMock();

        $m->expects($this->once())
            ->method('getTempFname')
            ->will(
                $this->returnValue(
                    __DIR__ . 'nonexisting' . DIRECTORY_SEPARATOR . 'filename'
                )
            );

        $m->addRaw('');
    }

    /**
     * @expectedException iio\libmergepdf\Exception
     */
    public function testUnvalidFileNameError()
    {
        $m = new Merger();
        $m->addFromFile(__DIR__ . '/nonexistingfile');
    }

    /**
     * @expectedException iio\libmergepdf\Exception
     */
    public function testNoPdfsAddedError()
    {
        $m = new Merger();
        $m->merge();
    }

    /**
     * @expectedException iio\libmergepdf\Exception
     */
    public function testAddInvalidIterator()
    {
        $m = new Merger();
        $m->addIterator(null);
    }

    public function testAddIterator()
    {
        $m = $this->getMockBuilder('\iio\libmergepdf\Merger')
            ->setMethods(array('addFromFile'))
            ->getMock();

        $m->expects($this->exactly(2))
            ->method('addFromFile');

        $m->addIterator(array('A', 'B'));
    }

    public function testAddFinder()
    {
        $m = $this->getMockBuilder('\iio\libmergepdf\Merger')
            ->setMethods(array('addFromFile'))
            ->getMock();

        $m->expects($this->exactly(2))
            ->method('addFromFile')
            ->with(__FILE__);

        $finder = $this->getMockBuilder('\Symfony\Component\Finder\Finder')
            ->disableOriginalConstructor()
            ->getMock();

        $file = new \SplFileInfo(__FILE__);

        $finder->expects($this->once())
            ->method('getIterator')
            ->will($this->returnValue(new \ArrayIterator(array($file, $file))));

        $m->addFinder($finder);
    }

    public function testMerge()
    {
        $fpdi = $this->getMockBuilder('\FPDI')
            ->setMethods(array(
                'setSourceFile',
                'importPage',
                'getTemplateSize',
                'AddPage',
                'useTemplate',
                'Output'
            ))
            ->getMock();

        $fpdi->expects($this->at(2))
            ->method('importPage')
            ->will($this->returnValue(2));

        $fpdi->expects($this->at(4))
            ->method('getTemplateSize')
            ->will($this->returnValue(array(10,20)));

        $fpdi->expects($this->once())
            ->method('Output')
            ->will($this->returnValue('merged'));

        $m = new Merger($fpdi);
        $m->addRaw('');
        $m->addRaw('');
        $this->assertEquals('merged', $m->merge());
    }

    /**
     * @expectedException iio\libmergepdf\Exception
     */
    public function testInvalidPageError()
    {
        $fpdi = $this->getMockBuilder('\FPDI')
            ->setMethods(array('importPage', 'setSourceFile'))
            ->getMock();

        $fpdi->expects($this->once())
            ->method('importPage')
            ->will($this->throwException(new \RuntimeException));

        $m = new Merger($fpdi);
        $m->addRaw('', new Pages('2'));
        $m->merge();
    }

    /**
     * @expectedException        iio\libmergepdf\Exception
     * @expectedExceptionMessage FPDI: 'message' in '
     */
    public function testFpdiException()
    {
        $fpdi = $this->getMockBuilder('\FPDI')
            ->setMethods(array('setSourceFile'))
            ->getMock();

        $fpdi->expects($this->once())
            ->method('setSourceFile')
            ->will($this->throwException(new \RuntimeException('message')));

        $m = new Merger($fpdi);
        $m->addRaw('');
        $m->merge();
    }

    public function testSetGetTempDir()
    {
        $m = new Merger;

        $this->assertSame(
            sys_get_temp_dir(),
            $m->getTempDir()
        );

        $newTempDir = "foobar";
        $m->setTempDir($newTempDir);

        $this->assertSame(
            $newTempDir,
            $m->getTempDir()
        );
    }
}
