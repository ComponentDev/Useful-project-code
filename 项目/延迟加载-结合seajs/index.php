<?php
	
	 //���ӵ�����mysql���ݿ�
    $myconn=mysql_connect("localhost","root","");
    //ѡ��testΪ������
    mysql_query("set names 'gbk'"); 

    mysql_select_db("loadint",$myconn);

	$count = $_POST['count'];
    $strSql="select * from loadimg limit ".($count*6).", 6";
    $result=mysql_query($strSql,$myconn);
    while($row=mysql_fetch_assoc($result))
    {
		$rows[] = $row;
	}
	
	sleep(1);
	echo json_encode($rows);
	
	
	/*******
	
	(count+page)*6 + count*6
	
	count  page  value
	
	1		1		
	
	2		2		
	******/
	
?>