<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" integrity="sha512-NhSC1YmyruXifcj/KFRWoC561YpHpc5Jtzgvbuzx5VozKpWvQ+4nXhPdFgmx8xqexRcpAglTj9sIBWINXa8x5w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/../resources/style.css">
    <link rel="icon" href="https://cdn4.iconfinder.com/data/icons/real-estate-2-30/48/98-512.png" type="image/icon type">
    <title>All Apartments</title>
</head>
<body>
<nav>
    <?php require(__DIR__ . '/navigation.php') ?>
</nav>
<section class="form">
    <form method="POST" action="/apartments/availabledates">
        <span>
            <select name="city" id="city">
            <option value="">--------- Choose city ---------</option>
            <?php foreach ($cities as $city): ?>
                <option value="<?= $city ?>"> <?= $city ?></option>
            <?php endforeach; ?>
        </select>
        </span>
        <span>
        <label for="start_date">Check-in: </label>
        <input class="home-input" type="date" id="start_date" name="start_date" required>
        </span>
        <span>
        <label for="end_date">Check-out: </label>
        <input class="home-input" type="date" id="end_date" name="end_date" required>
        </span>
        <input type="submit" name="check-btn" class="btn" value="BOOK NOW"/>
    </form>
</section>
<main>
    <h1 class="fixed-home">ALL OUR APARTMENTS:</h1>
    <div class="apartments">
        <?php foreach ($apartments as $apartment): ?>
            <div class="card">
                <a href="apartments/<?= $apartment['apartment_id']; ?>">
                    <img alt="Apartment Photo" class="img-all"
                         src="<?= '/../resources/images/' . $apartment['photo_name']; ?>"/>
                    <p class="apartment-city">
                        <ion-icon name="pin"></ion-icon>
                        <?php echo $apartment['city']; ?></p>
                    <h2 class="apartment-name"><?php echo $apartment['name']; ?></h2>
                </a>
                <div class="price">
                    <ion-icon name="cash"></ion-icon>
                    <?php echo $apartment['daily_price'] . ' €/ night'; ?>
                </div>
                <div class="price">
                    <ion-icon name="cash"></ion-icon>
                    <?php echo $apartment['weekly_price'] . ' €/ week'; ?>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</main>
</body>
</html>

