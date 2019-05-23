<!DOCTYPE html>
{strip}
<html class="no-js" itemscope="itemscope" itemtype="http://schema.org/{if !isset($uri[1])}WebPage{else}ItemPage{/if}" lang="{$_page.lang}">
<head>
	<title itemprop="name">{$_meta.title}</title>
	<meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta content="{$_meta.robots}" name="robots">
    <meta content="{$_meta.keywords}" name="keywords">
    <meta content="{$_meta.description}" name="description" itemprop="description">
	{if isset($pagination.prev) && $pagination.prev !== ''}
		<link rel="prev" href="?page={$pagination.prev}">
	{/if}
	{if isset($pagination.next) && $pagination.next !== ''}
		<link rel="next" href="?page={$pagination.next}">
	{/if}
	<link rel="home" href="/">
	<!-- CSS -->
	<link type="text/css" rel="stylesheet" href="/css/normalize.css" >
	<link type="text/css" rel="stylesheet" href="/css/style.css" >
	<link type="text/css" rel="stylesheet" href="/css/dropzone.css" >
	{*<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">*}
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
	<script type="text/javascript" src="/js/jquery.min.js"></script>
	<script type="text/javascript" src="/js/dropzone.js"></script>
</head>
<body class="page-{$_page.system}">
{/strip}