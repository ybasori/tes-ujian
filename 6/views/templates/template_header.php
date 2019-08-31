<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="lib/style.css">
</head>
<body>
    
    <ul>
        <li>
            <a href="/">Home<?= ($request->requestUri=="/")?"*":"" ?></a>
        </li>
        <li>
            <a href="/biodata">Biodata<?= ($request->requestUri=="/biodata")?"*":"" ?></a>
        </li>
        <li>
            <a href="/cities">Cities<?= ($request->requestUri=="/cities")?"*":"" ?></a>
        </li>
    </ul>