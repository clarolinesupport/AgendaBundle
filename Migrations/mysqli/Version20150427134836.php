<?php

namespace Claroline\AgendaBundle\Migrations\mysqli;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated migration based on mapping information: modify it with caution
 *
 * Generation date: 2015/04/27 01:48:40
 */
class Version20150427134836 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        $this->addSql("
            ALTER TABLE claro_event 
            ADD is_all_day TINYINT(1) NOT NULL, 
            ADD is_task TINYINT(1) NOT NULL, 
            ADD is_task_done TINYINT(1) NOT NULL, 
            DROP allday, 
            DROP istask
        ");
    }

    public function down(Schema $schema)
    {
        $this->addSql("
            ALTER TABLE claro_event 
            ADD allday TINYINT(1) NOT NULL, 
            ADD istask TINYINT(1) NOT NULL, 
            DROP is_all_day, 
            DROP is_task, 
            DROP is_task_done
        ");
    }
}