<?php


use Phinx\Migration\AbstractMigration;
use Phinx\Db\Adapter\MysqlAdapter;


class CreateArchivesTable extends AbstractMigration
{
    /**
     * Change Method.
     *
     * Write your reversible migrations using this method.
     *
     * More information on writing migrations is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-abstractmigration-class
     *
     * The following commands can be used in this method and Phinx will
     * automatically reverse them when rolling back:
     *
     *    createTable
     *    renameTable
     *    addColumn
     *    addCustomColumn
     *    renameColumn
     *    addIndex
     *    addForeignKey
     *
     * Any other destructive changes will result in an error when trying to
     * rollback the migration.
     *
     * Remember to call "create()" or "update()" and NOT "save()" when working
     * with the Table class.
     */
    public function change()
    {

        $this->table('archives')
            ->addColumn('title', 'string')
            ->addColumn('description', 'text', ['limit' => MysqlAdapter::TEXT_LONG])
            ->addColumn('location', 'string')
            ->addColumn('image', 'string')
            ->addColumn('created_at', 'datetime')
            ->addColumn('slug', 'string')
            ->addColumn('post', 'boolean',['null' => true])
            ->create();
    }
}
