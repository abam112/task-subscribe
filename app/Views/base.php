<!doctype html>
<html lang="en">

<head>
    <?= $this->include('layouts/head') ?>
</head>

<body>
    <main role="main " class="container">

    <?= $this->renderSection('content') ?>
    </main>

    <?= $this->include('layouts/scripts') ?>
</body>
</html>