<?php

namespace Tests\Unit;

use Tests\TestCase;

class ProjectTest extends TestCase
{
    public function testProjectHasPath()
    {
        $project = factory('App\Project')->create();

        $this->assertEquals('/projects/' . $project->id, $project->path());
    }

    public function testProjectBelongsToAnOwner()
    {
        $project = factory('App\Project')->create();

        $this->assertInstanceOf('App\User', $project->owner);
    }
}
