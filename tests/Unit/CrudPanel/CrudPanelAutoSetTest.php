<?php

namespace Backpack\CRUD\Tests\Unit\CrudPanel;

use Backpack\CRUD\Tests\Unit\Models\ColumnType;
use Backpack\CRUD\Tests\Unit\Models\User;

class CrudPanelAutoSetTest extends BaseDBCrudPanelTest
{
    private $expectedUnknownFieldType = 'text';

    private $expectedFieldTypeFromColumnType = [
        'bigintegercol' => 'number',
        'binarycol' => 'text',
        'booleancol' => 'boolean',
        'charcol' => 'text',
        'datecol' => 'date',
        'datetimecol' => 'datetime',
        'datetimetzcol' => 'datetime',
        'decimalcol' => 'number',
        'doublecol' => 'number',
        'enumcol' => 'text',
        'floatcol' => 'number',
        'integercol' => 'number',
        'ipaddresscol' => 'text',
        'jsoncol' => 'textarea',
        'jsonbcol' => 'textarea',
        'longtextcol' => 'textarea',
        'macaddresscol' => 'text',
        'mediumintegercol' => 'number',
        'mediumtextcol' => 'textarea',
        'smallintegercol' => 'number',
        'stringcol' => 'text',
        'textcol' => 'textarea',
        'timecol' => 'time',
        'timetzcol' => 'time',
        'tinyintegercol' => 'number',
        'timestampcol' => 'datetime',
        'timestamptzcol' => 'datetime',
        'uuidcol' => 'text',
    ];

    private $expectedColumnTypesFromDb = [
        'bigintegercol' => [
            'type' => 'integer',
            'default' => '',
        ],
        'binarycol' => [
            'type' => 'blob',
            'default' => '',
        ],
        'booleancol' => [
            'type' => 'boolean',
            'default' => '',
        ],
        'charcol' => [
            'type' => 'string',
            'default' => '',
        ],
        'datecol' => [
            'type' => 'date',
            'default' => '',
        ],
        'datetimecol' => [
            'type' => 'datetime',
            'default' => '',
        ],
        'datetimetzcol' => [
            'type' => 'datetime',
            'default' => '',
        ],
        'decimalcol' => [
            'type' => 'decimal',
            'default' => '',
        ],
        'doublecol' => [
            'type' => 'float',
            'default' => '',
        ],
        'enumcol' => [
            'type' => 'string',
            'default' => '',
        ],
        'floatcol' => [
            'type' => 'float',
            'default' => '',
        ],
        'integercol' => [
            'type' => 'integer',
            'default' => '',
        ],
        'ipaddresscol' => [
            'type' => 'string',
            'default' => '',
        ],
        'jsoncol' => [
            'type' => 'text',
            'default' => '',
        ],
        'jsonbcol' => [
            'type' => 'text',
            'default' => '',
        ],
        'longtextcol' => [
            'type' => 'text',
            'default' => '',
        ],
        'macaddresscol' => [
            'type' => 'string',
            'default' => '',
        ],
        'mediumintegercol' => [
            'type' => 'integer',
            'default' => '',
        ],
        'mediumtextcol' => [
            'type' => 'text',
            'default' => '',
        ],
        'smallintegercol' => [
            'type' => 'integer',
            'default' => '',
        ],
        'stringcol' => [
            'type' => 'string',
            'default' => '',
        ],
        'textcol' => [
            'type' => 'text',
            'default' => '',
        ],
        'timecol' => [
            'type' => 'time',
            'default' => '',
        ],
        'timetzcol' => [
            'type' => 'time',
            'default' => '',
        ],
        'tinyintegercol' => [
            'type' => 'integer',
            'default' => '',
        ],
        'timestampcol' => [
            'type' => 'datetime',
            'default' => '',
        ],
        'timestamptzcol' => [
            'type' => 'datetime',
            'default' => '',
        ],
        'uuidcol' => [
            'type' => 'string',
            'default' => '',
        ],
    ];

    private $expectedColumnTypes = [
        'bigintegercol' => [
            'name' => 'bigintegercol',
            'label' => 'Bigintegercol',
            'value' => null,
            'default' => null,
            'type' => 'text',
            'values' => [],
            'attributes' => [],
            'autoset' => true,
        ],
        'binarycol' => [
            'name' => 'binarycol',
            'label' => 'Binarycol',
            'value' => null,
            'default' => null,
            'type' => 'text',
            'values' => [],
            'attributes' => [],
            'autoset' => true,
        ],
        'booleancol' => [
            'name' => 'booleancol',
            'label' => 'Booleancol',
            'value' => null,
            'default' => null,
            'type' => 'boolean',
            'values' => [],
            'attributes' => [],
            'autoset' => true,
        ],
        'charcol' => [
            'name' => 'charcol',
            'label' => 'Charcol',
            'value' => null,
            'default' => null,
            'type' => 'text',
            'values' => [],
            'attributes' => [],
            'autoset' => true,
        ],
        'datecol' => [
            'name' => 'datecol',
            'label' => 'Datecol',
            'value' => null,
            'default' => null,
            'type' => 'date',
            'values' => [],
            'attributes' => [],
            'autoset' => true,
        ],
        'datetimecol' => [
            'name' => 'datetimecol',
            'label' => 'Datetimecol',
            'value' => null,
            'default' => null,
            'type' => 'datetime',
            'values' => [],
            'attributes' => [],
            'autoset' => true,
        ],
        'datetimetzcol' => [
            'name' => 'datetimetzcol',
            'label' => 'Datetimetzcol',
            'value' => null,
            'default' => null,
            'type' => 'datetime',
            'values' => [],
            'attributes' => [],
            'autoset' => true,
        ],
        'decimalcol' => [
            'name' => 'decimalcol',
            'label' => 'Decimalcol',
            'value' => null,
            'default' => null,
            'type' => 'text',
            'values' => [],
            'attributes' => [],
            'autoset' => true,
        ],
        'doublecol' => [
            'name' => 'doublecol',
            'label' => 'Doublecol',
            'value' => null,
            'default' => null,
            'type' => 'text',
            'values' => [],
            'attributes' => [],
            'autoset' => true,
        ],
        'enumcol' => [
            'name' => 'enumcol',
            'label' => 'Enumcol',
            'value' => null,
            'default' => null,
            'type' => 'text',
            'values' => [],
            'attributes' => [],
            'autoset' => true,
        ],
        'floatcol' => [
            'name' => 'floatcol',
            'label' => 'Floatcol',
            'value' => null,
            'default' => null,
            'type' => 'text',
            'values' => [],
            'attributes' => [],
            'autoset' => true,
        ],
        'integercol' => [
            'name' => 'integercol',
            'label' => 'Integercol',
            'value' => null,
            'default' => null,
            'type' => 'text',
            'values' => [],
            'attributes' => [],
            'autoset' => true,
        ],
        'ipaddresscol' => [
            'name' => 'ipaddresscol',
            'label' => 'Ipaddresscol',
            'value' => null,
            'default' => null,
            'type' => 'text',
            'values' => [],
            'attributes' => [],
            'autoset' => true,
        ],
        'jsoncol' => [
            'name' => 'jsoncol',
            'label' => 'Jsoncol',
            'value' => null,
            'default' => null,
            'type' => 'textarea',
            'values' => [],
            'attributes' => [],
            'autoset' => true,
        ],
        'jsonbcol' => [
            'name' => 'jsonbcol',
            'label' => 'Jsonbcol',
            'value' => null,
            'default' => null,
            'type' => 'textarea',
            'values' => [],
            'attributes' => [],
            'autoset' => true,
        ],
        'longtextcol' => [
            'name' => 'longtextcol',
            'label' => 'Longtextcol',
            'value' => null,
            'default' => null,
            'type' => 'textarea',
            'values' => [],
            'attributes' => [],
            'autoset' => true,
        ],
        'macaddresscol' => [
            'name' => 'macaddresscol',
            'label' => 'Macaddresscol',
            'value' => null,
            'default' => null,
            'type' => 'text',
            'values' => [],
            'attributes' => [],
            'autoset' => true,
        ],
        'mediumintegercol' => [
            'name' => 'mediumintegercol',
            'label' => 'Mediumintegercol',
            'value' => null,
            'default' => null,
            'type' => 'text',
            'values' => [],
            'attributes' => [],
            'autoset' => true,
        ],
        'mediumtextcol' => [
            'name' => 'mediumtextcol',
            'label' => 'Mediumtextcol',
            'value' => null,
            'default' => null,
            'type' => 'textarea',
            'values' => [],
            'attributes' => [],
            'autoset' => true,
        ],
        'smallintegercol' => [
            'name' => 'smallintegercol',
            'label' => 'Smallintegercol',
            'value' => null,
            'default' => null,
            'type' => 'text',
            'values' => [],
            'attributes' => [],
            'autoset' => true,
        ],
        'stringcol' => [
            'name' => 'stringcol',
            'label' => 'Stringcol',
            'value' => null,
            'default' => null,
            'type' => 'text',
            'values' => [],
            'attributes' => [],
            'autoset' => true,
        ],
        'textcol' => [
            'name' => 'textcol',
            'label' => 'Textcol',
            'value' => null,
            'default' => null,
            'type' => 'textarea',
            'values' => [],
            'attributes' => [],
            'autoset' => true,
        ],
        'timecol' => [
            'name' => 'timecol',
            'label' => 'Timecol',
            'value' => null,
            'default' => null,
            'type' => 'time',
            'values' => [],
            'attributes' => [],
            'autoset' => true,
        ],
        'timetzcol' => [
            'name' => 'timetzcol',
            'label' => 'Timetzcol',
            'value' => null,
            'default' => null,
            'type' => 'time',
            'values' => [],
            'attributes' => [],
            'autoset' => true,
        ],
        'tinyintegercol' => [
            'name' => 'tinyintegercol',
            'label' => 'Tinyintegercol',
            'value' => null,
            'default' => null,
            'type' => 'text',
            'values' => [],
            'attributes' => [],
            'autoset' => true,
        ],
        'timestampcol' => [
            'name' => 'timestampcol',
            'label' => 'Timestampcol',
            'value' => null,
            'default' => null,
            'type' => 'datetime',
            'values' => [],
            'attributes' => [],
            'autoset' => true,
        ],
        'timestamptzcol' => [
            'name' => 'timestamptzcol',
            'label' => 'Timestamptzcol',
            'value' => null,
            'default' => null,
            'type' => 'datetime',
            'values' => [],
            'attributes' => [],
            'autoset' => true,
        ],
        'uuidcol' => [
            'name' => 'uuidcol',
            'label' => 'Uuidcol',
            'value' => null,
            'default' => null,
            'type' => 'text',
            'values' => [],
            'attributes' => [],
            'autoset' => true,
        ],
    ];

    private $expectedFieldsFromDb = [
        'bigintegercol' => [
            'name' => 'bigintegercol',
            'label' => 'Bigintegercol',
            'value' => null,
            'default' => null,
            'type' => 'number',
            'values' => [],
            'attributes' => [],
            'autoset' => true,
        ],
        'binarycol' => [
            'name' => 'binarycol',
            'label' => 'Binarycol',
            'value' => null,
            'default' => null,
            'type' => 'text',
            'values' => [],
            'attributes' => [],
            'autoset' => true,
        ],
        'booleancol' => [
            'name' => 'booleancol',
            'label' => 'Booleancol',
            'value' => null,
            'default' => null,
            'type' => 'checkbox',
            'values' => [],
            'attributes' => [],
            'autoset' => true,
        ],
        'charcol' => [
            'name' => 'charcol',
            'label' => 'Charcol',
            'value' => null,
            'default' => null,
            'type' => 'text',
            'values' => [],
            'attributes' => [],
            'autoset' => true,
        ],
        'datecol' => [
            'name' => 'datecol',
            'label' => 'Datecol',
            'value' => null,
            'default' => null,
            'type' => 'date',
            'values' => [],
            'attributes' => [],
            'autoset' => true,
        ],
        'datetimecol' => [
            'name' => 'datetimecol',
            'label' => 'Datetimecol',
            'value' => null,
            'default' => null,
            'type' => 'datetime',
            'values' => [],
            'attributes' => [],
            'autoset' => true,
        ],
        'datetimetzcol' => [
            'name' => 'datetimetzcol',
            'label' => 'Datetimetzcol',
            'value' => null,
            'default' => null,
            'type' => 'datetime',
            'values' => [],
            'attributes' => [],
            'autoset' => true,
        ],
        'decimalcol' => [
            'name' => 'decimalcol',
            'label' => 'Decimalcol',
            'value' => null,
            'default' => null,
            'type' => 'number',
            'values' => [],
            'attributes' => [],
            'autoset' => true,
        ],
        'doublecol' => [
            'name' => 'doublecol',
            'label' => 'Doublecol',
            'value' => null,
            'default' => null,
            'type' => 'number',
            'values' => [],
            'attributes' => [],
            'autoset' => true,
        ],
        'enumcol' => [
            'name' => 'enumcol',
            'label' => 'Enumcol',
            'value' => null,
            'default' => null,
            'type' => 'text',
            'values' => [],
            'attributes' => [],
            'autoset' => true,
        ],
        'floatcol' => [
            'name' => 'floatcol',
            'label' => 'Floatcol',
            'value' => null,
            'default' => null,
            'type' => 'number',
            'values' => [],
            'attributes' => [],
            'autoset' => true,
        ],
        'integercol' => [
            'name' => 'integercol',
            'label' => 'Integercol',
            'value' => null,
            'default' => null,
            'type' => 'number',
            'values' => [],
            'attributes' => [],
            'autoset' => true,
        ],
        'ipaddresscol' => [
            'name' => 'ipaddresscol',
            'label' => 'Ipaddresscol',
            'value' => null,
            'default' => null,
            'type' => 'text',
            'values' => [],
            'attributes' => [],
            'autoset' => true,
        ],
        'jsoncol' => [
            'name' => 'jsoncol',
            'label' => 'Jsoncol',
            'value' => null,
            'default' => null,
            'type' => 'textarea',
            'values' => [],
            'attributes' => [],
            'autoset' => true,
        ],
        'jsonbcol' => [
            'name' => 'jsonbcol',
            'label' => 'Jsonbcol',
            'value' => null,
            'default' => null,
            'type' => 'textarea',
            'values' => [],
            'attributes' => [],
            'autoset' => true,
        ],
        'longtextcol' => [
            'name' => 'longtextcol',
            'label' => 'Longtextcol',
            'value' => null,
            'default' => null,
            'type' => 'textarea',
            'values' => [],
            'attributes' => [],
            'autoset' => true,
        ],
        'macaddresscol' => [
            'name' => 'macaddresscol',
            'label' => 'Macaddresscol',
            'value' => null,
            'default' => null,
            'type' => 'text',
            'values' => [],
            'attributes' => [],
            'autoset' => true,
        ],
        'mediumintegercol' => [
            'name' => 'mediumintegercol',
            'label' => 'Mediumintegercol',
            'value' => null,
            'default' => null,
            'type' => 'number',
            'values' => [],
            'attributes' => [],
            'autoset' => true,
        ],
        'mediumtextcol' => [
            'name' => 'mediumtextcol',
            'label' => 'Mediumtextcol',
            'value' => null,
            'default' => null,
            'type' => 'textarea',
            'values' => [],
            'attributes' => [],
            'autoset' => true,
        ],
        'smallintegercol' => [
            'name' => 'smallintegercol',
            'label' => 'Smallintegercol',
            'value' => null,
            'default' => null,
            'type' => 'number',
            'values' => [],
            'attributes' => [],
            'autoset' => true,
        ],
        'stringcol' => [
            'name' => 'stringcol',
            'label' => 'Stringcol',
            'value' => null,
            'default' => null,
            'type' => 'text',
            'values' => [],
            'attributes' => [],
            'autoset' => true,
        ],
        'textcol' => [
            'name' => 'textcol',
            'label' => 'Textcol',
            'value' => null,
            'default' => null,
            'type' => 'textarea',
            'values' => [],
            'attributes' => [],
            'autoset' => true,
        ],
        'timecol' => [
            'name' => 'timecol',
            'label' => 'Timecol',
            'value' => null,
            'default' => null,
            'type' => 'time',
            'values' => [],
            'attributes' => [],
            'autoset' => true,
        ],
        'timetzcol' => [
            'name' => 'timetzcol',
            'label' => 'Timetzcol',
            'value' => null,
            'default' => null,
            'type' => 'time',
            'values' => [],
            'attributes' => [],
            'autoset' => true,
        ],
        'tinyintegercol' => [
            'name' => 'tinyintegercol',
            'label' => 'Tinyintegercol',
            'value' => null,
            'default' => null,
            'type' => 'number',
            'values' => [],
            'attributes' => [],
            'autoset' => true,
        ],
        'timestampcol' => [
            'name' => 'timestampcol',
            'label' => 'Timestampcol',
            'value' => null,
            'default' => null,
            'type' => 'datetime',
            'values' => [],
            'attributes' => [],
            'autoset' => true,
        ],
        'timestamptzcol' => [
            'name' => 'timestamptzcol',
            'label' => 'Timestamptzcol',
            'value' => null,
            'default' => null,
            'type' => 'datetime',
            'values' => [],
            'attributes' => [],
            'autoset' => true,
        ],
        'uuidcol' => [
            'name' => 'uuidcol',
            'label' => 'Uuidcol',
            'value' => null,
            'default' => null,
            'type' => 'text',
            'values' => [],
            'attributes' => [],
            'autoset' => true,
        ],
    ];

    public function testGetFieldTypeFromDbColumnType()
    {
        $this->crudPanel->setModel(ColumnType::class);
        $this->crudPanel->setFromDb();

        $fieldTypesFromColumnType = [];
        foreach ($this->crudPanel->create_fields as $field) {
            $fieldTypesFromColumnType[] = $this->crudPanel->getFieldTypeFromDbColumnType($field['name']);
        }

        $this->assertEquals(array_values($this->expectedFieldTypeFromColumnType), $fieldTypesFromColumnType);
    }

    public function testSetFromDb()
    {
        $this->crudPanel->setModel(ColumnType::class);

        $this->crudPanel->setFromDb();

        $this->assertEquals($this->expectedFieldsFromDb, $this->crudPanel->create_fields);
        $this->assertEquals($this->expectedFieldsFromDb, $this->crudPanel->update_fields);
    }

    public function testGetDbColumnTypes()
    {
        $this->crudPanel->setModel(ColumnType::class);

        $columnTypes = $this->crudPanel->getDbColumnTypes();

        $this->assertEquals($this->expectedColumnTypesFromDb, $columnTypes);
    }

    public function testGetFieldTypeFromDbColumnTypeUnknownField()
    {
        $fieldType = $this->crudPanel->getFieldTypeFromDbColumnType('someFieldName1');

        $this->assertEquals($this->expectedUnknownFieldType, $fieldType);
    }

    public function testMakeLabel()
    {
        //$this->markTestIncomplete('Not correctly implemented');

        $idLabel = $this->crudPanel->makeLabel('id');
        $snakeCaseFKLabel = $this->crudPanel->makeLabel('id_user');
        $camelCaseFKLabel = $this->crudPanel->makeLabel('idUser');
        $camelCaseFKLabelReversed = $this->crudPanel->makeLabel('userId');
        $dateLabel = $this->crudPanel->makeLabel('created_at');
        $camelCaseLabel = $this->crudPanel->makeLabel('camelCaseLabel');
        $camelCaseRandomLabel = $this->crudPanel->makeLabel('camelCaseLabelRANDOMCase');
        $simpleLabel = $this->crudPanel->makeLabel('label');
        $snakeCaseLabel = $this->crudPanel->makeLabel('snake_case_label');
        $snakeCaseRandomLabel = $this->crudPanel->makeLabel('snake_Case_random_CASE');
        $allCapsLabel = $this->crudPanel->makeLabel('ALLCAPSLABEL');

        // TODO: the id label gets removed. it should not be removed if it is not followed by anything.
        // TODO: improve method documentation to know what to expect.
        $this->assertEquals('Id', $idLabel);
        $this->assertEquals('Id User', $snakeCaseFKLabel);
        $this->assertEquals('Id User', $camelCaseFKLabel);
        $this->assertEquals('User', $camelCaseFKLabelReversed);
        $this->assertEquals('Created', $dateLabel);
        $this->assertEquals('Camel Case Label', $camelCaseLabel);
        $this->assertEquals('Camel Case Label Random Case', $camelCaseRandomLabel);
        $this->assertEquals('Label', $simpleLabel);
        $this->assertEquals('Snake Case Label', $snakeCaseLabel);
        $this->assertEquals('Snake Case Random Case', $snakeCaseRandomLabel);
        $this->assertEquals('Allcapslabel', $allCapsLabel);
    }

    public function testMakeLabelEmpty()
    {
        $label = $this->crudPanel->makeLabel('');

        $this->assertEmpty($label);
    }

    public function testGetDbColumnsNames()
    {
        $this->crudPanel->setModel(ColumnType::class);

        $columnNames = $this->crudPanel->getDbColumnsNames();

        $this->assertEquals(array_keys($this->expectedColumnTypes), $columnNames);
    }

    public function testGetColumnTypeFromDbColumnType()
    {
        $this->crudPanel->setModel(ColumnType::class);
        $this->crudPanel->setFromDb();

        $this->assertEquals(\count($this->expectedColumnTypes), \count($this->crudPanel->columns));
        foreach ($this->crudPanel->columns as $key => $value) {
            $this->assertEquals($this->expectedColumnTypes[$key]['type'], $value['type']);
        }

    }

    public function testExcludeMetadataColumns()
    {
        $this->crudPanel->setModel(User::class);

        config(['backpack.crud.exclude_metadata_columns' => true]);
        $this->crudPanel->setFromDb();
        $this->assertCount(4, $this->crudPanel->columns);

        config(['backpack.crud.exclude_metadata_columns' => false]);
        $this->crudPanel->setFromDb();
        $this->assertCount(7, $this->crudPanel->columns);

    }
}
