<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\HttpKernel\Tests\Profiler;

use Symfony\Component\HttpKernel\DataCollector\RequestDataCollector;
use Symfony\Component\HttpKernel\Profiler\SqliteProfilerStorage;
use Symfony\Component\HttpKernel\Profiler\Profiler;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class ProfilerTest extends \PHPUnit_Framework_TestCase
{
<<<<<<< HEAD
    private $tmp;
    private $storage;

    public function testCollect()
    {
=======
    public function testCollect()
    {
        if (!class_exists('SQLite3') && (!class_exists('PDO') || !in_array('sqlite', \PDO::getAvailableDrivers()))) {
            $this->markTestSkipped('This test requires SQLite support in your environment');
        }

>>>>>>> c742c5d59814f58a71be789c21c15cbbb3ca2887
        $request = new Request();
        $request->query->set('foo', 'bar');
        $response = new Response();
        $collector = new RequestDataCollector();

<<<<<<< HEAD
        $profiler = new Profiler($this->storage);
=======
        $tmp = tempnam(sys_get_temp_dir(), 'sf2_profiler');
        if (file_exists($tmp)) {
            @unlink($tmp);
        }
        $storage = new SqliteProfilerStorage('sqlite:'.$tmp);
        $storage->purge();

        $profiler = new Profiler($storage);
>>>>>>> c742c5d59814f58a71be789c21c15cbbb3ca2887
        $profiler->add($collector);
        $profile = $profiler->collect($request, $response);

        $profile = $profiler->loadProfile($profile->getToken());
        $this->assertEquals(array('foo' => 'bar'), $profiler->get('request')->getRequestQuery()->all());
<<<<<<< HEAD
    }

    public function testFindWorksWithDates()
    {
        $profiler = new Profiler($this->storage);

        $this->assertCount(0, $profiler->find(null, null, null, null, '7th April 2014', '9th April 2014'));
    }

    public function testFindWorksWithTimestamps()
    {
        $profiler = new Profiler($this->storage);

        $this->assertCount(0, $profiler->find(null, null, null, null, '1396828800', '1397001600'));
    }

    public function testFindWorksWithInvalidDates()
    {
        $profiler = new Profiler($this->storage);

        $this->assertCount(0, $profiler->find(null, null, null, null, 'some string', ''));
    }

    protected function setUp()
    {
        if (!class_exists('Symfony\Component\HttpFoundation\Request')) {
            $this->markTestSkipped('The "HttpFoundation" component is not available');
        }

        if (!class_exists('SQLite3') && (!class_exists('PDO') || !in_array('sqlite', \PDO::getAvailableDrivers()))) {
            $this->markTestSkipped('This test requires SQLite support in your environment');
        }

        $this->tmp = tempnam(sys_get_temp_dir(), 'sf2_profiler');
        if (file_exists($this->tmp)) {
            @unlink($this->tmp);
        }

        $this->storage = new SqliteProfilerStorage('sqlite:'.$this->tmp);
        $this->storage->purge();
    }

    protected function tearDown()
    {
        $this->storage->purge();
        $this->storage = null;

        @unlink($this->tmp);
=======

        @unlink($tmp);
>>>>>>> c742c5d59814f58a71be789c21c15cbbb3ca2887
    }
}
