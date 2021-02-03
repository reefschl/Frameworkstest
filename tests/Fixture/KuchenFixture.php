<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * KuchenFixture
 */
class KuchenFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'kuchen';
    /**
     * Fields
     *
     * @var array
     */
    // phpcs:disable
    public $fields = [
        'Apfelkuchen' => ['type' => 'integer', 'length' => null, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'Mohnkuchen' => ['type' => 'integer', 'length' => null, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'Bienenstich' => ['type' => 'integer', 'length' => null, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['Apfelkuchen'], 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'latin1_swedish_ci'
        ],
    ];
    // phpcs:enable
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'Apfelkuchen' => 1,
                'Mohnkuchen' => 1,
                'Bienenstich' => 1,
            ],
        ];
        parent::init();
    }
}
