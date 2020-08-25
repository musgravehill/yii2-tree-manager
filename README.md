# Tree Manager for Yii2

Виджет для управления деревом.

Внимание!
-----
Виджет рассчитан на работу с поведениями Павла Зимакова:

[Yii2 Adjacency List Behavior](https://github.com/paulzi/yii2-adjacency-list)  
[Yii2 Nested Sets Behavior](https://github.com/paulzi/yii2-nested-sets)  
[Yii2 Nested Intervals Behavior](https://github.com/paulzi/yii2-nested-intervals)  
[Yii2 Materialized Path Behavior](https://github.com/paulzi/yii2-materialized-path)  

Отличная статья на [Хабре](http://habrahabr.ru/post/266155/).


Installation
-------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist musgravehill/yii2-tree-manager "~1.0"
```

or add

```
"musgravehill/yii2-tree-manager": "~1.0"
```

to the require section of your `composer.json` file.


Usage
-----
 
  1. Подключите к вашей модели любое из указанных выше поведений
  
  2. Подключите в контроллер дополнительные actions

```
public function actions()
{
    $modelClass = 'namespace\ModelName';

    return [
        'moveNode' => [
            'class' => 'musgravehill\tree\manager\actions\MoveNodeAction',
            'modelClass' => $modelClass,
        ],
        'deleteNode' => [
            'class' => 'musgravehill\tree\manager\actions\DeleteNodeAction',
            'modelClass' => $modelClass,
        ],
        'updateNode' => [
            'class' => 'musgravehill\tree\manager\actions\UpdateNodeAction',
            'modelClass' => $modelClass,
        ],
        'createNode' => [
            'class' => 'musgravehill\tree\manager\actions\CreateNodeAction',
            'modelClass' => $modelClass,
        ],
    ];
}
```  

3. Выведите виджет в удобном месте

```
use \musgravehill\tree\manager\widgets\nestable\Nestable;

<?= Nestable::widget([
    'modelClass' => 'models\ModelName',
]) ?>
```

  app \translates\ru-RU\vendor\musgravehill\yii2-tree-manager\widgets\nestable.php
return [
    'The nobe will be removed together with the children. Are you sure?' => 'Удалить item вместе с наследниками?',
    'Enter the new node name' => 'Название',
    'Node name' => 'Название',
    'Add node to root' => 'Добавить item',
    'Collapse all' => 'Скрыть все',
    'Expand all' => 'Раскрыть все',
    'New node' => 'Создать item',
    'Close' => 'Закрыть',
    'Create node' => 'Создать item',
    'save' => 'Сохранить',
    'delete node' => 'Удалить',
    'create child' => 'Добавить наследника',
];
