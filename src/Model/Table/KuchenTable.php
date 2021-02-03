<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Kuchen Model
 *
 * @method \App\Model\Entity\Kuchen newEmptyEntity()
 * @method \App\Model\Entity\Kuchen newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Kuchen[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Kuchen get($primaryKey, $options = [])
 * @method \App\Model\Entity\Kuchen findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Kuchen patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Kuchen[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Kuchen|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Kuchen saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Kuchen[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Kuchen[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Kuchen[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Kuchen[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class KuchenTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('kuchen');
        $this->setDisplayField('Apfelkuchen');
        $this->setPrimaryKey('Apfelkuchen');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->integer('Apfelkuchen')
            ->allowEmptyString('Apfelkuchen', null, 'create');

        $validator
            ->integer('Mohnkuchen')
            ->requirePresence('Mohnkuchen', 'create')
            ->notEmptyString('Mohnkuchen');

        $validator
            ->integer('Bienenstich')
            ->requirePresence('Bienenstich', 'create')
            ->notEmptyString('Bienenstich');

        return $validator;
    }
}
