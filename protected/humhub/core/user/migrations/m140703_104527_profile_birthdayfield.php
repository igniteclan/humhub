<?php

use yii\db\Schema;
use yii\db\Migration;

class m140703_104527_profile_birthdayfield extends Migration
{

    public function up()
    {
        // Check if the installer already ran when not create new profile field
        // (Typically the installer creates initial data.)
        if (\humhub\models\Setting::isInstalled()) {
            /*
            $db = $this->getDbConnection();

            // Get "General" Category Group Id
            $categoryId = $db->createCommand()
                    ->select('id')
                    ->from('profile_field_category')
                    ->where('title=:title', array(':title' => 'General'))
                    ->queryScalar();

            // Check if we got a category Id
            if ($categoryId == "") {
                throw new CException("Could not find 'General' profile field category!");
            }

            // Create manually profile field
            $insertCommand = $db->commandBuilder->createInsertCommand('profile_field', array(
                'profile_field_category_id' => $categoryId,
                'field_type_class' => 'ProfileFieldTypeBirthday',
                'field_type_config' => '',
                'internal_name' => 'birthday',
                'title' => 'Birthday',
                'sort_order' => '850',
                'editable' => '1',
                'is_system' => '1',
                'visible' => '1',
                'show_at_registration' => '0',
                'required' => '0',
            ));
            $insertCommand->execute();
            */
            // Create columns for profile field
            $this->addColumn('profile', 'birthday', 'DATETIME DEFAULT NULL');
            $this->addColumn('profile', 'birthday_hide_year', 'INT(1) DEFAULT NULL');
        }
    }

    public function down()
    {
        echo "m140703_104527_profile_birthdayfield does not support migration down.\n";
        return false;
    }

    /*
      // Use safeUp/safeDown to do migration with transaction
      public function safeUp()
      {
      }

      public function safeDown()
      {
      }
     */
}
