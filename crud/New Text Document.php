config.php
------------------
<?php

define("DB_HOST","localhost");
define("DB_USER","root");
define("DB_PASS","");
define("DB_NAME","firozshah");
?>

database.php
----------------
<?php

class Database{
	
	public $host	=	DB_HOST;
	public $user	=	DB_USER;
	public $pass	=	DB_PASS;
	public $dbname	=	DB_NAME;
	
	public $link;
	public $error;
	
	public function __construct(){
		$this->connectDB();
	}
	private function connectDB(){
		
		$this->link = new mysqli($this->host, $this->user, $this->pass, $this->dbname);
		if(!$this->link){
			
			$this->error="Connection Failed".$this->link->connect_error;
			return false;
		}
	}
	// Select or read database
	public function select($query){
		
			$result=$this->link->query($query) or die($this->link-error__LINE__);
			if($result->num_rows>0){
			return $result;
	}else{
			return false;
	}
}
}
?>
style.css
------------------
.tblone{wodth:100%; border:1px solid #fff; margin:20px 0}
.tblone th{padding:5px 10px;text-align:left; }
.tblone td{padding:5px 10px;text-align:left; }
table.tblone tr:nth-child(2n+1){background:#ffffff; height:30px;}
table.tblone tr:nth-child(2n){background:#f1f1f1f1; height:30px;}
#myform{width:400px;border:1px solid #ffffff;padding:10px;}
index.php
------------------
<?php include('include/header.php');?>
<?php include('config.php');?>
<?php include('database.php');?>
<!---------------------------------------------------------------------------------------------->
<?php
$db= new Database();

$query="SELECT * FROM contact";
$read= $db->select($query);
?>
<table class="tblone">

<tr>
	<th width="5%">id</th>
	<th width="25%">name</th>
	<th width="30%">address</th>
	<th width="30%">phone/email</th>
	<th width="10%">action</th>
</tr>
<?php  if($read) {?>
<?php while($row=$read->fetch_assoc()){?>
<tr>
	<td width="20%"><?php echo $row['id'];?></td>
	<td width="20%"><?php echo $row['name'];?></td>
	<td width="20%"><?php echo $row['address'];?></td>
	<td width="20%"><?php echo $row['email'];?></td>
	<td width="20%"><a href="update.php?id=<?php echo $row['id'];?>">Edit</a></td>
</tr>
<?php } ?>
<?php }else{ ?>

<p>Data is not available!!</p>

<?php } ?>
</table>

<!--------------------------------------------------------------------------------------------->
<?php include('include/footer.php');?>