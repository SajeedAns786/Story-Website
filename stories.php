<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Stories Website</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <?php include('partials/connect.php'); ?>
    <?php include('partials/header.php'); ?>
    <?php
    $id = $_GET['story_id'];
    $sql = "SELECT* FROM `topics` where topic_id = $id";
    $result = mysqli_query($con, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
        $topic_name = $row['topic_name'];
        $topic_desc = $row['topic_desc'];
        $topic_image = $row['topic_image'];
    }



    ?>


    <div class="container-fluid">
        <div class="jumbotron bg-warning rounded">
            <div class="container">
                <h1 class="display-4">
                    <?php echo $topic_name; ?>
                </h1>
                <p class="lead"> <?php echo $topic_desc; ?> </p>
                <button class="btn btn-dark">
                    <a class="text-light" href="#reading" role="button">Continue Reading</a>
                </button>

            </div>
        </div>
    </div>

    <div class="container-fluid slider">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="images/img11.jpg" class="d-block w-100" alt="..." />
                </div>
                <div class="carousel-item">
                    <img src="images/img10.jpg" class="d-block w-100" alt="..." />
                </div>
                <div class="carousel-item">
                    <img src="images/img9.jpg" class="d-block w-100" alt="..." />
                </div>
            </div>
        </div>
    </div>

    <div class="container" id="reading">
        <div class="jumbotron  jumbotron-fluid bg-warning rounded p-0">
            <div class="container">
                <h1 class="display-4 text-center">Enjoy Reading</h1>
                <img src=" <?php echo $topic_image; ?>" class="img-fluid" alt="">
                <p class="lead pb-3">This is a simple hero unit, a simple jumbotron-style component for calling extra
                    attention
                    to
                    featured content or information. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ratione
                    modi voluptatum commodi excepturi molestias consequuntur possimus! Error ratione ipsa animi illum
                    rerum maxime mollitia odit temporibus quod. Cum et eum corporis sunt earum molestiae magni numquam
                    laboriosam, iure harum a perspiciatis repellendus quo obcaecati non voluptas nobis consectetur
                    beatae excepturi reiciendis ab nemo? Est iusto quae natus alias rem obcaecati facere. Nulla iusto
                    minus corporis facere veniam iure expedita aut eaque vel cum. Praesentium odio deleniti ad
                    reiciendis excepturi optio voluptas quae architecto, quam vitae, laboriosam ex. Itaque aliquam at, a
                    dolores, corrupti praesentium, accusantium voluptatem nulla eveniet sapiente voluptas tenetur iste
                    illum! Expedita accusamus labore mollitia impedit iste quasi eaque doloribus excepturi, laudantium
                    nihil laboriosam eos numquam quae dicta, voluptatem et adipisci illum, voluptatibus id asperiores
                    cum enim in harum porro. Officia rem eligendi tempora assumenda autem ducimus, atque iste! Qui
                    quibusdam ut sed vero vel, atque non facilis quisquam odio ex minima corrupti praesentium odit
                    adipisci delectus cum excepturi, quis aut minus, et similique expedita rerum iusto nemo? Minus
                    obcaecati deserunt dolore sit aliquid temporibus perferendis, fugiat inventore illum maiores.
                    Voluptas a nemo consequuntur enim est temporibus explicabo molestias ipsam dolorem commodi minima
                    velit laudantium quod aliquid facere magnam, doloribus earum? Repellat illum maxime facilis
                    accusantium perspiciatis, qui at alias fuga sint rerum. Tempora, sunt alias corrupti tenetur earum
                    ipsa cum nemo consectetur rem provident totam sed nam repellendus eaque placeat fugit velit
                    cupiditate amet ad cumque iste. Quasi, nesciunt? Aliquid sit, inventore error facilis accusamus sed
                    nulla, reiciendis dolore earum deserunt, quidem porro doloremque obcaecati. Eaque consequatur maxime
                    ut harum. Exercitationem blanditiis delectus, nulla dolores maxime consequuntur unde assumenda sequi
                    necessitatibus animi? Vel nobis ab magni tempora ipsam sapiente sit ea autem itaque a perspiciatis
                    alias dignissimos odit, fugit neque dolore. Magnam velit necessitatibus soluta repellat sed voluptas
                    animi, nihil quaerat voluptatibus quasi. Nulla veritatis enim reprehenderit saepe earum cupiditate
                    fuga sapiente labore assumenda, molestiae dignissimos tempore iusto maxime impedit amet! Nostrum
                    aliquid praesentium dolor sapiente voluptas reiciendis perspiciatis excepturi veritatis iure ex
                    molestiae sed dolores porro, quas natus quaerat nesciunt nemo provident deserunt ea dolorum.
                    Molestiae eaque quaerat consectetur alias dolores dolorum atque quasi distinctio commodi voluptate
                    inventore eos ut aliquid exercitationem minus ipsa natus error mollitia nobis incidunt fuga
                    adipisci, quisquam expedita! Consequuntur illo repellat quas minus natus tenetur tempore ipsa
                    adipisci aliquid vero consequatur eveniet rem placeat excepturi sunt, fugiat dolorem, nobis a
                    impedit.</p>


            </div>
        </div>
    </div>

    <div class="container-fluid mb-4">
        <h2 class="text-center display-4">Thank you for your time &#128522</h2>
    </div>

    <?php include('partials/footer.php'); ?>
</body>

</html>