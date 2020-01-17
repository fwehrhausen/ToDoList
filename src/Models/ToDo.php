<?php

namespace ToDoList\Models;

use Plenty\Modules\Plugin\DataBase\Contracts\Model;

//The following data types are allowed:int, string, float, double, boolean and array
//You can change the name and type of the primary key attribute by overwriting the protected attributes $primaryKeyFieldName and $primaryKeyFieldType

//Man muss entweder die Deklarion der Datentypen und der Attributte global für die Klasse machen, oder für jedes Attribut einzeln zum Beispiel /** @var int */
/**
 * Class ToDo
 *
 * @property int     $id
 * @property string  $taskDescription
 * @property int     $userId
 * @property boolean $isDone
 * @property int     $createdAt
 * @property int     $updatedAt
 */
class ToDo extends Model
{
    //The autoincrement option will be assigned automatically to primary key attributes. You can overwrite the protected attribute autoIncrementPrimaryKey and change its value to false to avoid auto-incrementing of your primary key field.
    public $id              = 0;
    public $taskDescription = '';
    public $userId          = 0;
    public $isDone          = false;
    public $createdAt       = 0;
    public $updatedAt       = 0;

    /**
     * @return string
     */
    public function getTableName(): string
    {
        //The model must return the plugin name and the model name separated by two colons: return 'ToDoList::ToDo'.
        return 'ToDoList::ToDo';
    }
}
