<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Upload Tugas - SMART LEARNING!</title>
    <link rel="stylesheet" href="/dist/css/tugas.css">
</head>
<body>
    <div class="wrapper">
        <div class="box">
            <div class="input-bx">
                <h2 class="upload-area-title">Upload file</h2>
                <form action="">
                    <input type="file" id="upload" accept=".doc,.docx,.pdf.,zip.,rar" hidden>
                    <label for="upload" class="uploadlabel">
                        <span><i class="fa fa-cloud-upload"></i></span>
                        <p>Click to upload</p>
                    </label>
                    <!-- Submit button -->
                    <button type="submit" class="submit-button">Kirim</button>
                </form>
            </div>
        </div>
    </div>
    <script src="/dist/js/script.js"></script>
</body>
</html>
