 <?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Migration_log_auth extends CI_Migration {

	function up()
	{
		$this->dbforge->add_field(array(
                'id' => array(
                    'type' => 'INT',
                    'constraint' => 20,
                    'unsigned' => TRUE,
                    'auto_increment' => TRUE
                ),

                'user_id' => array(
                    'type' => 'VARCHAR',
                    'constraint' => '50',
                ),

                'timestamp' => array(
                    'type' => 'TIMESTAMP',
                    'default' => 'CURRENT_TIMESTAMP',
                ),

                'signature' => array(
                	'type' => 'TEXT'
                )
        ));
        
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('log_auth');
	}

	function down()
	{
		$this->dbforge->drop_table('log_auth');
	}

}

?>