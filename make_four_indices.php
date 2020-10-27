#!/usr/bin/php
<?php
	// Get the first columns, i.e. ticker symbol from SP500.txt
	$ifile=fopen("SP500.txt",'r');
	$symbols=array();
	while(!feof($ifile)){
		$line=fgets($ifile);
		$line=strchr($line," ",TRUE);
			$symbols[]=trim($line);
	}
	fclose($ifile);
	$row='sp500_constituents = ["'.implode('","',$symbols).'"]';
	echo $row;
	echo "\n\n";
	$ofile=fopen("indices.py","w");
	fwrite($ofile,$row);
	fwrite($ofile,"\n\n");



	$ifile=fopen("SP400.txt",'r');
	$symbols=array();
	while(!feof($ifile)){
		$line=fgets($ifile);
		$arr=explode("\t",$line);
		$symbols[]=trim($arr[1]);
	}
	fclose($ifile);
	$row='sp400_constituents = ["'.implode('","',$symbols).'"]';
	echo $row;
	echo "\n\n";
	fwrite($ofile,$row);
	fwrite($ofile,"\n\n");


	$ifile=fopen("SP600.txt",'r');
	$symbols=array();
	while(!feof($ifile)){
		$line=fgets($ifile);
		$arr=explode("\t",$line);
		$symbols[]=trim($arr[1]);
	}
	fclose($ifile);
	$row='sp600_constituents = ["'.implode('","',$symbols).'"]';
	echo $row;
	echo "\n\n";
	fwrite($ofile,$row);
	fwrite($ofile,"\n\n");

	$row="sp1600_constituents = sp500_constituents + sp400_constituents + sp600_constituents";

	echo $row;
	echo "\n\n";
	fwrite($ofile,$row);
	fwrite($ofile,"\n\n");

	$ifile=fopen("NASDAQ100.txt",'r');
	$symbols=array();
	while(!feof($ifile)){
		$line=fgets($ifile);
		$arr=explode("\t",$line);
		$symbols[]=trim($arr[1]);
	}
	fclose($ifile);
	$row='nasdaq100_constituents = ["'.implode('","',$symbols).'"]';
	echo $row;
	echo "\n\n";
	fwrite($ofile,$row);
	fwrite($ofile,"\n\n");

	fclose($ofile);
?>
