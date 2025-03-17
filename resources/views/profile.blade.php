<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg,rgba(50, 72, 169, 0.43) 25%, transparent 25%) -50px 0,
                        linear-gradient(225deg, #e0f7fa 25%, transparent 25%) -50px 0,
                        linear-gradient(315deg, #e0f7fa 25%, transparent 25%),
                        linear-gradient(45deg, #e0f7fa 25%, transparent 25%);
            background-size: 100px 100px;
            background-color:rgb(126, 220, 214);
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }
        .profile-card {
            background: rgba(226, 46, 43, 0.9); /* Semi transparan */
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
            text-align: center;
            width: 400px;
        }
        .profile-img {
            width: 130px;
            height: 130px;
            border-radius: 50%;
            background: url('https://tse3.mm.bing.net/th?id=OIP.MOpZYwcQ8dWeU0A6Q2IS9AHaEc&pid=Api&P=0&h=180') no-repeat center;
            background-size: cover;
            margin: 0 auto 20px;
            border: 6px solidrgb(212, 0, 53);
        }
        .profile-info {
            width: 100%;
            padding: 12px;
            margin: 8px 0;
            background:rgb(5, 7, 5);
            border-radius: 8px;
            font-weight: bold;
            color:rgb(217, 229, 221);
            font-size: 18px;
            text-align: center;
        }
    </style>
</head>
<body>

    <div class="profile-card">
        <div class="profile-img"></div>
        <div class="profile-info">Nama: {{ $nama }}</div>
        <div class="profile-info">Kelas: {{ $kelas }}</div>
        <div class="profile-info">NPM: {{ $npm }}</div>
    </div>

</body>
</html>