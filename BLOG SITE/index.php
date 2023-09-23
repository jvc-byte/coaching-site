<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="shortcut icon" href="IMAGE/logo.jpg" type="image/x-icon"> -->
    <!-- Favicons -->
    <link href="IMAGE/favicon.png" rel="icon">
    <link href="IMAGE/apple-touch-icon.png" rel="apple-touch-icon">
    <script src="https://kit.fontawesome.com/13d098a0cf.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia" />
    <link rel="stylesheet" href="bootstrap-5.3.1-dist/bootstrap-5.3.1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="CSS/style.css">
    <title>val web | home</title>
</head>

<body>
    <header>
        <?php include_once 'CMS/header.php' ?>
    </header>

    <!-- Modal for sign up and sign in starts -->
    <!-- sign up modal starts -->
    <div class="modal fade mt-4" id="signUpModal" aria-hidden="true" aria-labelledby="signUpModalLabel"
        data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <!-- sign up modal content starts -->
            <div class="modal-content">
                <!-- modal header starts -->
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="signUpModalLabel">Sign up</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <!-- modal header ends -->
                <!-- modal body starts -->
                <div class="modal-body">
                    <?php include_once "CMS/signUpModal.php" ?>
                    <div class="container mt-3">
                        <div class="row">
                            <!-- Social sign up icon header -->
                            <strong>Or sign up with:</strong>
                            <!-- Social sign up icons starts -->
                            <div class="text-center">
                                <button type="button" class="btn btn-primary btn-floating mx-1">
                                    <i class="fab fa-facebook-f"></i>
                                </button>

                                <button type="button" class="btn btn-primary btn-floating mx-1">
                                    <i class="fab fa-google"></i>
                                </button>

                                <button type="button" class="btn btn-primary btn-floating mx-1">
                                    <i class="fab fa-twitter"></i>
                                </button>

                                <button type="button" class="btn btn-primary btn-floating mx-1">
                                    <i class="fab fa-github"></i>
                                </button>
                            </div>
                            <!-- Social sign up icons ends -->
                        </div>
                    </div>
                </div>
                <!-- modal body ends -->
                <!-- modal footer starts -->
                <div class="modal-footer">
                    <p>Already have an account?</p>
                    <button class="btn btn-primary" data-bs-target="#signInModal" data-bs-toggle="modal">Sign
                        in</button>
                </div>
                <!-- modal footer ends -->
            </div>
            <!-- sign up modal content ends -->
        </div>
    </div>
    <!-- sign up modal ends -->

    <!-- sign in modal starts -->
    <div class="modal fade" id="signInModal" aria-hidden="true" aria-labelledby="signUpModalLabel2" tabindex="-1"
        data-bs-backdrop="static" data-bs-keyboard="false">
        <div class="modal-dialog modal-dialog-centered">
            <!-- sign in modal contents starts -->
            <div class="modal-content">
                <!-- madal header -->
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="signUpModalLabel2">Sign in</h1>
                    <button type="button" id="closeModalButton" class="btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <!-- sign in modal body starts -->
                <div class="modal-body">
                    <?php include_once "CMS/signInModal.php" ?>
                    <div class="container mt-4">
                        <div class="row">
                            <!-- Social sign up buttons -->
                            <b>Or sign in with:</b>
                            <div class="text-center">
                                <button type="button" class="btn btn-primary btn-floating mx-1">
                                    <i class="fab fa-facebook-f"></i>
                                </button>

                                <button type="button" class="btn btn-primary btn-floating mx-1">
                                    <i class="fab fa-google"></i>
                                </button>

                                <button type="button" class="btn btn-primary btn-floating mx-1">
                                    <i class="fab fa-twitter"></i>
                                </button>

                                <button type="button" class="btn btn-primary btn-floating mx-1">
                                    <i class="fab fa-github"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- sign in modal body ends -->
                <!-- sign in modal footer -->
                <div class="modal-footer">
                    <P>Don't have an account?</P>
                    <button class="btn btn-primary" data-bs-target="#signUpModal" data-bs-toggle="modal">Sign
                        up</button>
                </div>
            </div>
            <!-- sign in modal contents ends -->
        </div>
    </div>
    <!-- sign in modal ends -->
    <!-- Modal for sign up and sign in ends -->

    <!-- home page starts -->
    <main id="HomePage">
        <!-- section for carousel, anouncement, inspiration & learn more/register now starts -->
        <section>
            <!-- carousel and card(anouncement & inspiration) starts -->
            <div class="container">
                <div class="row h-100">
                    <!-- carousel starts -->
                    <div class="col-md-7">
                        <?php include_once "CMS/slider.php" ?>
                    </div>
                    <!-- carousel ends -->
                    <!-- inspiration and anouncement card starts -->
                    <div class="col-md-5 mt-4 mt-md-0">
                        <?php include_once "CMS/sliderCard.php" ?>
                    </div>
                    <!-- inspiration and anouncement card ends -->
                </div>
            </div>
            <!-- carousel and card(anouncement & inspiration) ends -->
            <!-- learn more or register now starts -->
            <div class="container text-center" aria-label="learn more or register now">
                <div class="row">
                    <a href="#" class="learnReg col-md-3">Learn More <span class="badge"><i
                                class="fa fa-play-circle-o icon"></i></span></a>
                    <a href="#" class="learnReg registar col-md-3">Register Now</a>
                </div>
            </div>
            <!-- learn more or register now starts -->
        </section>
        <!-- section for carousel, anouncement, inspiration & learn more/register now ends -->

        <!-- about us starts -->
        <section class="mt-5 text-md-start text-center">
            <div class="container mt-4">
                <h3>About us</h3>
                <div class="row">
                    <?php include_once "CMS/aboutUsCard.php" ?>
                </div>
            </div>
        </section>
        <!-- about us ends -->

        <!-- our programs starts -->
        <article>
            <div class="container-sm text-center mb-4">
                <h3>Our Programs</h3>
                <p class="card-text">Coach offers business coaching workshop programs that are designed to step up
                    progress and accelerate results in both your business and personal life. Our global community
                    of successful entrepreneurs, our highly experienced coaches, our arsenal of proprietary tools,
                    and our deep-dive strategy sessions are the cornerstones of our programs' success.
                </p>
            </div>
            <!-- Our program card starts -->
            <div class="container">
                <div class="row">
                    <?php include_once "CMS/ourProgramCard.php" ?>
                </div>
            </div>
            <!-- Our program card ends -->
            <!-- some texts below our programs card starts -->
            <div class="container-sm text-center mt-4">
                <p>Our Signature Program, offered both in person and virtually,
                    provides a rare opportunity to plan for the future, determine how best to get there, and what's most
                    pressing in your business right now. Each option gives you the chance to gain new insights from
                    people in other industries and other parts of the world. You'll come away with prioritized, concrete
                    action steps, new tools and capabilities, and a plan for the next 90 days.
                </p>
            </div>
            <!-- some texts below our programs card starts -->
        </article>
        <!-- our programs ends -->
        <!-- success story starts -->
        <article>
            <div class=" container-sm text-center mb-3 mt-5">
                <h3>Success Stories</h3>
                <p class="card-text">Ask our entrepreneurs about their experience in our Coaching, and every story
                    would be different — but with a common thread running through them: Results. Unexpected results.
                    More-than-expected results. Off-shoot results. Very often, life-changing results.
                </p>
            </div>

            <!-- success story card starts -->
            <div class="container">
                <div class="row">
                    <?php include_once "CMS/successPageCard.php" ?>
                </div>
            </div>
            <!-- success story card ends -->
        </article>
        <!-- success story ends -->

        <!-- book sales advert starts -->
        <article class="gradient-section mt-5">
            <div class="container d-flex justify-content-center align-items-center">
                <div class="card border-0" style="max-width: 540px; background: none;">
                    <?php include_once "CMS/bookSalesAdvertCard.php" ?>
                </div>
            </div>
        </article>
        <!-- book sales advert ends -->

        <!-- Modal for book advert starts -->
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content BookModal">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Downlod the E-book now</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                        <div class="card mb-3 border-0 BookModalCard">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="IMAGE/book image 2.png" class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title" id="ModalBookTitle">Book title</h5>
                                        <p class="card-text">Book description.This content is a little bit longer.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h6 class="card-title">Book summary or overview</h6>
                        <p>Omnis, sint earum? Alias optio quae perspiciatis laboriosam voluptatem vel ipsam rerum modi
                            quaerat
                            asperiores dolorum dolor nam eveniet minima facere, repellat, cumque quam consequatur
                            reiciendis
                            doloribus culpa! Fuga, exercitationem.
                            Dolorum dolorem itaque, enim dicta quidem reprehenderit possimus adipisci quas, modi
                            sapiente
                            consequatur fugit voluptate vitae ratione ipsa voluptas aliquid, distinctio similique
                            voluptates
                            corrupti unde? Ducimus, non! Praesentium, facere ea?
                        </p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary BookModalBtn"
                            data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary BookModalBtn BookModalBtnDnld"><a
                                class="BookModalBtn" href="IMAGE/book image 2.png" DOWNLOAD>Download</a></button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal for book advert ends -->
    </main>
    <!-- home page ends -->

    <!-- about us page starts here -->
    <article id="AboutPage">
        <div class="container">
            <h1 class="text-center Head1Tag">About Us</h1>
            <div class="row Head1TagBody">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas ipsam suscipit aliquam laudantium
                alias! Earum eius nemo, quidem magnam esse similique quasi hic error temporibus, veritatis fugit quis
                quisquam a!
                Odio voluptates quibusdam, commodi alias reiciendis distinctio, velit laboriosam adipisci voluptate
                dolorum consequuntur molestiae totam officia dignissimos saepe est deleniti quos blanditiis
                voluptatibus, explicabo a. Fuga eum dolor cum dicta!
                Officiis iste reprehenderit accusamus itaque dolorum architecto? Unde cupiditate magni dolorem atque,
                veniam reiciendis odit dolorum soluta corrupti consequuntur, maxime modi! Laboriosam necessitatibus
                totam ad accusantium dolorum, minima ab earum.
                Placeat explicabo recusandae sapiente dolores corporis commodi, ipsam soluta mollitia molestiae et quo
                inventore itaque nostrum ad earum officiis dicta consequuntur cupiditate deleniti officia possimus
                maxime eaque harum saepe! Ipsum.
                Vitae fugit ullam nihil nostrum suscipit labore qui quibusdam repudiandae, maiores reprehenderit harum
                ratione ipsum, quo at veniam inventore saepe culpa! Dicta beatae ut pariatur magni! Unde porro amet
                totam!
                Soluta odio ut praesentium dolore illo harum quod eius tempore ea natus itaque suscipit, assumenda sed
                dolorum odit ipsum. Consectetur, obcaecati modi officiis culpa autem facilis rerum minus harum ex.
                Neque odio unde quo, ducimus provident odit quam architecto accusantium, magni repudiandae corporis
                accusamus porro, expedita quod iusto aliquid nam soluta maxime voluptas nulla necessitatibus! Sunt culpa
                officia laboriosam adipisci.
                Aliquam, atque. Molestiae culpa illum saepe provident nulla odit qui fugit atque officia aliquam,
                deleniti tempore alias eaque! Ratione esse impedit aspernatur neque voluptatum sed mollitia in voluptas
                magni reiciendis.
                Porro quas esse, error voluptates necessitatibus molestias laborum ab temporibus vero cupiditate
                nesciunt magnam modi iste veniam mollitia beatae maxime soluta id et quia a! Odit inventore quaerat
                dolor obcaecati!
                Incidunt consequuntur deleniti repellat iste libero. Quidem, atque excepturi perspiciatis porro esse
                culpa molestiae voluptatum error nulla incidunt sunt eveniet ab illo impedit. Sunt enim sint atque
                tempora at hic!
            </div>
        </div>
    </article>
    <!-- about us page ends here -->

    <!-- services page starts here -->
    <article id="ServicePage">
        <div class="container">
            <h1 class="text-center Head1Tag">services</h1>
            <div class="row Head1TagBody">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem eum vero consequuntur reiciendis,
                alias, culpa
                placeat qui mollitia sunt dignissimos autem dolore et quisquam repellat reprehenderit modi saepe iure!
                Quidem.
                Rem tempora enim harum placeat debitis minus eligendi sit corrupti officia, deserunt expedita quidem
                quae atque
                reprehenderit excepturi, porro aliquid ipsa minima impedit ut ipsum dolore? Iste iure quisquam dolorum!
                Maxime quod, nihil eveniet dicta exercitationem aspernatur assumenda placeat architecto voluptatem
                adipisci,
                nesciunt, consequatur sequi. Atque dicta, rem ducimus labore ab quam mollitia tempora, beatae et itaque
                magnam
                pariatur eveniet!
                Dolor ipsam odit quisquam qui esse aperiam vitae exercitationem quidem expedita, possimus excepturi,
                facere
                maxime. Tempore sed, itaque saepe odit ut maiores nam, est voluptas eius, provident fugit veniam
                corporis?
                Cumque, laborum dicta soluta, numquam veritatis beatae adipisci autem sint commodi sapiente sequi
                perferendis
                saepe labore ea amet aliquam, distinctio cupiditate velit eligendi doloremque! Est iure blanditiis nisi
                natus
                mollitia?
                Obcaecati recusandae commodi nesciunt possimus eveniet magnam sunt accusamus non magni, architecto minus
                ipsum
                fugit quaerat vel itaque, error voluptatibus? Ut minima aliquam laborum itaque tempore esse soluta
                libero
                reiciendis?
                Consectetur, quidem perspiciatis adipisci assumenda accusantium cumque! Cum asperiores adipisci nostrum
                nemo,
                aliquam atque doloremque commodi esse quia, vitae, minima ex? Natus eveniet dolorum quas molestiae
                labore
                delectus fugit autem?
                Iure accusamus pariatur voluptates autem. Beatae fugiat libero hic saepe ratione harum, excepturi unde
                officia
                sapiente, animi, recusandae ab voluptatum voluptatibus? Temporibus rerum dignissimos quod nulla modi
                amet
                consequatur veniam.
                Labore dolorem veritatis, iure voluptas explicabo, dolorum laborum recusandae, suscipit ea sed officia
                beatae
                deleniti. Delectus repudiandae quo eos voluptatibus sequi magnam eaque, similique officiis fugit,
                asperiores
                velit, aliquam quae.
                Praesentium nesciunt unde molestias? Eligendi debitis harum soluta ut quisquam laborum quibusdam rerum
                eveniet,
                praesentium explicabo beatae tenetur nobis corporis nostrum libero in. Impedit neque illum incidunt.
                Officiis,
                impedit rerum?
            </div>
        </div>
    </article>
    <!-- service page ends here -->

    <!-- blog page starts here -->
    <article id="BlogPage">
        <div class="container">
            <h1 class="text-center Head1Tag">Blog Page </h1>
            <div class="row row-cols-1 row-cols-md-3 g-4 Head1TagBody">
                <?php include_once "CMS/blogPageCard.php" ?>
            </div>
        </div>
    </article>
    <!-- blog page ends here -->

    <!-- contact us page starts here -->
    <article id="ContactPage">
        <div class="container">
            <h1 class="text-center Head1Tag">Contact Us</h1>
            <div class="row Head1TagBody">
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Beatae expedita natus corporis iure accusamus
                magnam veniam non aspernatur, explicabo voluptates voluptatibus facilis possimus tempora distinctio? A
                architecto corporis at vel.
                Molestias incidunt, quisquam voluptatem quidem vel impedit atque aliquid quibusdam deserunt! Libero,
                laudantium dolorum atque aperiam vitae unde sequi cum obcaecati ullam facilis voluptatum magni, laborum
                veniam iure animi magnam?
                Quod repellendus at libero nam, sit, delectus alias quibusdam sunt ipsa ut maiores amet. Animi,
                obcaecati repellat, voluptate, pariatur maxime voluptatem est nihil accusantium dignissimos dicta vero
                necessitatibus quod aut.
                Reiciendis facere atque consectetur quo neque harum. Exercitationem voluptatem consequuntur ullam
                eligendi, dolore itaque nulla magni eaque quasi mollitia voluptatibus error aspernatur inventore, soluta
                officiis nesciunt corrupti hic eius quas!
                At minus assumenda quas, molestias doloremque ipsum laborum. Sunt sed amet fugit laudantium quaerat et,
                soluta illo libero temporibus expedita blanditiis nisi maxime perferendis magni facilis minima iusto
                molestias quae.
                Laboriosam ipsam velit vero aperiam aliquam exercitationem cumque quasi incidunt! Corporis autem
                temporibus omnis perspiciatis magnam non reiciendis natus, maxime repudiandae voluptate reprehenderit
                optio enim! Autem sunt similique quasi quas?
                Quasi dicta numquam aut provident nemo doloribus enim delectus facere, dolorem earum adipisci minima
                explicabo veniam id unde voluptates veritatis sapiente ipsum eos! Atque autem veritatis asperiores
                excepturi dicta labore.
                Expedita cum dolores in saepe nam, aspernatur pariatur ullam labore deleniti numquam! Quam temporibus
                aliquam tempore pariatur omnis, consectetur possimus porro libero earum amet? Autem distinctio repellat
                maxime eveniet iste.
                Aut quasi mollitia maxime eius. Unde eligendi quis illo atque nobis nesciunt praesentium saepe doloribus
                omnis ipsa accusamus corporis deserunt incidunt, molestias, amet autem! Provident quis tempora earum
                ipsam recusandae?
                Odit autem nemo nobis tempore illum! Blanditiis culpa reprehenderit, libero labore accusantium
                aspernatur obcaecati repellat qui pariatur dolor voluptas recusandae dolore cupiditate ullam incidunt
                quae asperiores reiciendis impedit! Voluptatibus, eum.
            </div>
        </div>
    </article>
    <!-- contact us page ends here -->

    <!-- advert placement starts here -->
    <article class="advert mt-5">
        <a href="#" class="btn btn-outline-primary detail">advert placement </a>
    </article>
    <!-- advert placement ends here -->


    <footer>
        <?php include_once 'CMS/footer.php' ?>
    </footer>

</body>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="bootstrap-5.3.1-dist/bootstrap-5.3.1-dist/js/bootstrap.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="JS/script.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


</html>