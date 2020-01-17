<?php

namespace ToDoList\Migrations;

use ToDoList\Models\ToDo;
use Plenty\Modules\Plugin\DataBase\Contracts\Migrate;

/**
 * Class CreateToDoTable
 */
class CreateToDoTable
{
    /**
     * @param Migrate $migrate
     */
    public function run(Migrate $migrate)
    {
        $migrate->createTable(ToDo::class);
    }
}

/*
 * In line 5, we use the previously created model. We also have to use the Plenty\Modules\Plugin\DataBase\Contracts\Migrate class.
 * This class allows us to create and delete data tables. We use the Migrate class in the run() method and create a new data table with the name ToDo.
 * Learn how to specify the migration in the plugin.json file in the next chapter.
 */