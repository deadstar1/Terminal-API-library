<?php
include_once('curl.php');

$curl = new curl;
class endpoint {
	public $user_token='';
	public $access_token='';
	//public $curl = $GLOBALS['curl'];


	function get_snapshot($snapshot_id){
		$snapshot = ($GLOBALS['curl'] -> curl_terminal('/get_snapshot',
			array('snapshot_id' => $snapshot_id)
			));

		//return $snapshot;

	}


	function get_profile($username){

		$profile =($GLOBALS['curl']  -> curl_terminal('/get_profile',
			array('username' => $username)
			));

		return $profile;

	}

	function public_snapshots($filteredBy,$value){

		//filtered by featured title,page,perpage,sortby
		$public_snapshots = ($GLOBALS['curl']  -> curl_terminal('/list_public_snapshots',
			array($filteredBy => $value)
			));



		return $public_snapshots;
	}

	function count_public_snapshots($filteredBy,$value){

		$count = ($GLOBALS['curl']  -> curl_terminal('/count_public_snapshots',
			array($filteredBy => $value)
			));
		return $count;
		
	}


	//create and manage terminal
	//get information about, create, edit, and delete your Terminal instances.
	function list_terminal(){

		$list =($GLOBALS['curl'] -> curl_terminal('/list_terminals',
			array('user_token' => $this -> user_token,
				'access_token'=> $this -> access_token)
			));
		return $list;

	}

	function get_terminal($container_key,$subdomain){

			$terminal=($curl -> curl_terminal('/get_terminal',
				array('user_token' => $this -> user_token,
					'access_token'=> $access_token,
					'container_key' => $container_key,
					'subdomain' => $subdomain
					)

			));
		return $terminal;
	}
	///start_snapshot
	//Start a Terminal instance based on a snapshot. Return is of the form:
	function start_snapshot($snapshot_id,$cpu,$ram,$temporary,$name,$autopause,$start_script){
		$start_snapshot=($GLOBALS['curl'] -> curl_terminal('/start_snapshot',
			array('user_token' =>$this -> user_token,
				'access_token' =>$access_token,
				'snapshot_id' =>$snapshot_id,
				'cpu' =>$cpu,
				'ram' =>$ram,
				'temporary' =>$temporary,
				'name' =>$name,
				'autopause' =>$autopause,
				'start_script' =>$start_script
				)
			));
		return $start_snapshot;



	}

	function delete_terminal($container_key){
		$delete_terminal=($GLOBALS['curl'] -> curl_terminal('/delete_terminal',
			array('user_token' => $this -> user_token,
				'access_token' => $access_token,
				'container_key'=> $container_key
				)
			));

		return $delete_terminal;

	}
	function restart_terminal($container_key){

		$restart_terminal=($GLOBALS['curl'] -> curl_terminal('/restart_terminal',
			array('user_token' => $this -> user_token,
				'access_token' => $access_token,
				'container_key' => $container_key
				)
			));

		return $restart_terminal;

	}

	function pause_terminal($container_key){

		$pause_terminal=($GLOBALS['curl'] -> curl_terminal('/pause_terminal',
			array('user_token' => $this -> user_token,
				'access_token' => $access_token,
				'container_key' => $container_key
				)
			));

		return $pause_terminal;

	}
	function resume_terminal($container_key){

		$resume_terminal=($GLOBALS['curl'] -> curl_terminal('/resume_terminal',
			array('user_token' => $this -> user_token,
				'access_token' => $access_token,
				'container_key' => $container_key
				)
			));

		return $resume_terminal;

	}

	function edit_terminal($container_key,$cpu,$ram,$diskspace,$name,$custom_data){

		$edit_terminal=($GLOBALS['curl']-> curl_terminal('/edit_terminal',
			array('user_token' => $this -> user_token,
				'access_token' => $access_token,
				'cpu' => $cpu,
				'ram' => $ram,
				'diskspace' => $diskspace,
				'name' =>$name,
				'custom_data' => $custom_data
				)

			));
		return $edit_terminal;
	}


		//create and manage snapshot
	//Get information about, create, edit, and delete your snapshots.
	function list_snapshot($username,$tag,$featured,$title,$page,$perpage,$sortby){
		$list_snapshot=($GLOBALS['curl'] -> curl_terminal('/list_snapshots',
			array('user_token' => $this -> user_token,
				'access_token' => $access_token,
				'username' => $username,
				'tag' => $tag,
				'featured' => $featured,
				'title' => $title,
				'page' => $page,
				'perpage' => $perpage,
				'sortby' => $sortby
				)
			));
		return $list_snapshot;
	}
	


	//FUCKING PROBLEM
	function count_snapshot($username,$tag,$featured,$title){
		$count_snapshot=($GLOBALS['curl'] -> curl_terminal('/count_snapshots',
			array('user_token' => $this -> user_token,
				'access_token' => $this -> access_token,
				'username' => $username,
				'tag' => $tag,
				'featured' => $featured,
				'title' => $title
				)
			));
		
		return $count_snapshot;

	}	



	function delete_snapshot($snapshot_id){
		$delete_snapshot=($GLOBALS['curl'] -> curl_terminal('/delete_snapshot',
			array('user_token' =>$this -> user_token,
				'access_token' =>$username,
				'snapshot_id'=>$snapshot_id)
			));

		return $delete_snapshot;

	}

	function edit_snapshot($snapshot_id,$body,$title,$readme,$tags,$public,$custom_data){
		$edit_snapshot=($GLOBALS['curl'] -> curl_terminal('/edit_snapshot',array(
					'user_token' => $this -> user_token,
					'access_token' => $this -> access_token,
					'snapshot_id' => $snapshot_id,
					'body' => $body,
					'title' => $title,
					'readme' => $public,
					'tags' => $tags,
					'custom_data' => $custom_data)


			));
		return $edit_snapshot;

	}
	function snapshot_terminal($container_key,$body,$title,$readme,$tags,$public){
		$snapshot_terminal=($GLOBALS['curl'] -> curl_terminal('/snapshot_terminal',array(
					'user_token' => $this -> user_token,
					'access_token' => $this -> access_token,
					'snapshot_id' => $snapshot_id,
					'body' => $body,
					'title' => $title,
					'readme' => $public,
					'tags' => $tags,
					'custom_data' => $custom_data)


			));

		return $snapshot_terminal;
	}


	//manage terminal access
	//Manage who can see which ports of your Terminal instance.

	function add_terminal_links($container_key,$port,$source){
		$add_terminal_links=($GLOBALS['curl'] -> curl_terminal('/add_terminal_links',array(
			'user_token' => $this -> user_token,
			'access_token' => $this -> access_token,
			'container_key' => $container_key,
			'links' => array('port' => $port,
				'source' => $source)

			)



			));

		return $add_terminal_links;

	}

	function remove_terminal_links($container_key,$port,$source){
		$remove_terminal_links=($GLOBALS['curl'] -> curl_terminal('/remove_terminal_links',array(
			'user_token' => $this -> user_token,
			'access_token' => $this -> access_token,
			'container_key' => $container_key,
			'links' => array('port' => $port,
				'source' => $source)

			)



			));

		return $remove_terminal_links;

	}
	function list_terminal_access($container_key){
		$list_terminal_access=($GLOBALS['curl'] -> curl_terminal('/list_terminal_access',array(
			'user_token' => $this -> user_token,
			'access_token' => $this -> access_token,
			'container_key' => $container_key

			)

			));

		return $list_terminal_access;
	}

	function edit_terminal_access($container_key,$is_public_list,$access_rules){
		$edit_terminal_access =($GLOBALS['curl'] -> curl_terminal('/edit_terminal_access',array(
			'user_token' => $this -> user_token,
			'access_token' => $this -> access_token,
			'container_key' => $container_key,
			'is_public_list' => $is_public_list,
			'access_rules' => $access_rules

			)


			));
		return $edit_terminal_access;


	}
	//MANAGE TERMINAL DNS & DOMAINS
	//Allow other websites to point to Terminals
	function get_cname_records(){
		$get_cname_records=($GLOBALS['curl'] -> curl_terminal('/get_cname_records',array(
			'user_token' => $this -> user_token,
			'access_token' => $this -> access_token)
			));



		return get_cname_records;
	}

	function add_domain_to_pool($domain){
		$add_domain_to_pool=($GLOBALS['curl'] -> curl_terminal('/add_domain_to_pool',array(
			'user_token' => $this -> user_token,
			'access_token' => $this -> access_token,
			'domain' =>$domain
			)


			));
	}
	function remove_domain_from_pool($remove_domain_from_pool){
			$remove_domain_from_pool = ($GLOBALS['curl'] -> curl_terminal('/remove_domain_from_pool',array(
				'user_token' => $this -> user_token,
				'access_token' => $this -> access_token,
				'domain' =>$domain
				)



				));

		}

		////cname 
	function add_cname_record($domain,$subdomain,$port){
		$add_cname_record = ($GLOBALS['curl'] -> curl_terminal('/add_cname_record', array(
			'user_token' => $this -> user_token,
			'access_token' => $this -> access_token,
			'domain' => $domain,
			'subdomain' => $subdomain,
			'port' => $port
			)


			));




	}
	function remove_cname_record($domain){
		$remove_cname_record = ($GLOBALS['curl'] -> curl_terminal('/remove_cname_record',array(
			'user_token' => $this -> user_token,
			'access_token' => $this -> access_token,
			'domain' => $domain
			)
			));



	}
	//MANAGE TERMINAL IDLE SETTINGS
	//Make your terminals automatically pause or become smaller to save you money.

	//trigger must be array.
	//action = downgrade|pause

	function set_terminal_idle_settings($container_key,$triggers,$action){

		$set_terminal_idle_settings = ($GLOBALS['curl'] -> curl_terminal('/set_terminal_idle_settings',array(
			'user_token' => $this -> user_token,
			'access_token' => $this -> access_token,
			'container_key' => $container_key,
			'triggers' => $triggers,
			'action' => $action
			)
		));

	}

	function get_terminal_idle_settings($container_key){
		$get_terminal_idle_settings = ($GLOBALS['curl'] -> curl_terminal('/get_terminal_idle_settings',array(
			'user_token' => $this -> user_token,
			'access_token' => $this -> access_token,
			'$container_key' => $container_key)
		));



		return $get_terminal_idle_settings;

	}

	//MANAGE USAGE & CREDITS
	//View your usage, payment history, current burn, and more.

	function instance_types(){
		$instance_types = ($GLOBALS['curl'] -> curl_terminal('/instance_types','null'));
		return instance_types;


	}

	function instance_price(){

		$instance_price= ($GLOBALS['curl'] -> curl_terminal('/instance_price','null'));
		return $instance_price;

	}

	function balance(){

		$balance = ($GLOBALS['curl'] -> curl_terminal('/balance',array('user_token' => $this -> user_token,
			'access_token' => $this -> access_token
			)
		));


		return $balance;
	}

	function balance_added(){
		$balance_added = ($GLOBALS['curl'] -> curl_terminal('/balance_added',array('user_token'=> $this -> user_token,
			'access_token' => $this -> access_token
			)



			));


	}
	function gift($email,$cents){
		$gift=($GLOBALS['curl'] -> curl_terminal('/gift',array('user_token' => $this -> user_token,
			'access_token' => $this -> access_token,
			'email' => $email,
			'cents' => $cents
			)


			));


	}

	function burn_history(){
		$burn_history = ($GLOBALS['curl'] -> curl_terminal('/burn_history',array('user_token' => $this -> user_token,
			'access_token',$this -> access_token
			)

			));
		return $burn_history;

	}

	function terminal_usage_history(){
		$terminal_usage_history= ($GLOBALS['curl'] -> curl_terminal('/terminal_usage_history',array('user_token' => $this -> user_token,
			'access_token',$this -> access_token
			)

			));
		return $terminal_history;

	}

	function burn_state(){
		$burn_state = ($GLOBALS['curl'] -> curl_terminal('/burn_state',array('user_token' => $this -> user_token,
			'access_token',$this -> access_token
			)

			));
		return $burn_state;

	}
	function burn_estimates(){
		$burn_estimates = ($GLOBALS['curl'] -> curl_terminal('/burn_estimates',array('user_token' => $this -> user_token,
			'access_token',$this -> access_token
			)

			));
		return $burn_estimates;

	}


	//MANAGE SSH PUBLIC KEYS
	function add_authorized_key_to_terminal($container_key,$public_key){

		$add_authorized_key_to_terminal=($GLOBALS['curl'] -> curl_terminal('/add_authorized_key_to_terminal',array('user_token' => $this -> user_token,
			'access_token' => $this -> access_token,
			'container_key' => $container_key,
			'public_key' => $public_key
			)

			));
		return add_authorized_key_to_terminal;

	}
	function add_authorized_key_to_ssh_proxy($name,$public_key){

		$add_authorized_key_to_ssh_proxy= ($GLOBALS['curl'] -> curl_terminal('/add_authorized_key_to_ssh_proxy',array('user_token' => $this -> user_token,
			'access_token' => $this -> access_token,
			'name' => $name,
			'public_key' => $public_key
			)


			));

	}
	function del_authorized_key_from_ssh_proxy($name,$fingerprint){
		$del_authorized_key_from_ssh_proxy = ($GLOBALS['curl'] -> curl_terminal('/del_authorized_key_from_ssh_proxy',array('user_token' => $this -> user_token,
			'access_token' => $this -> access_token,
			'name' => $name,
			'fingerprint' => $fingerprint
			)
			));



	}
	function get_authorized_keys_from_ssh_proxy(){
		$get_authorized_keys_from_ssh_proxy =($GLOBALS['curl'] -> curl_terminal('/get_authorized_keys_from_ssh_proxy',array('user_token' => $this -> user_token,
			'access_token' => $this -> access_token)));


	}

}










?>
