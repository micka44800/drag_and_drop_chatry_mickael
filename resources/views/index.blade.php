<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://unpkg.com/dropzone@6.0.0-beta.1/dist/dropzone-min.js"></script>
    <link href="https://unpkg.com/dropzone@6.0.0-beta.1/dist/dropzone.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <h3>Drag drop Dropzone JS - mickael chatry</h3>
    <form action="{{ route('dropzone.store') }}" method="POST" enctype="multipart/form-data" id="image-upload"
        class="dropzone">
        @csrf
    </form>
</body>
<script type="text/javascript">
    new Dropzone("#image-upload", {
        thumbnailWidth: 200,
        maxFilesize: 100,
        acceptedFiles: ".jpeg,.jpg,.png,.gif"
    })
</script>

</html>
