<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>&#65279;</title>
    <meta name="description"
          content="This Tab Separator will help you to organize your pinned tabs on your favorite browser. You only need to pin this page, it's truly invisible.">
    <link rel="icon" href="favicon.ico" sizes="any"><!-- 32×32 -->
    <link rel="icon" href="icon.svg" type="image/svg+xml">
    <link rel="apple-touch-icon" href="favicon.ico"><!-- 180×180 -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            font-family: 'Open-Sans', sans-serif;
            text-align: center;
        }

        body {
            background: aliceblue;
        }

        main {
            width: 700px;
            margin: auto;
        }

        section {
            margin: 20px 0;
            padding: 10px;
            background: white;
            border-radius: 10px;
            box-shadow: 0 10px 10px -5px #d7d7d7;
        }

        footer {
            color: #8e8e8e;
        }

        h1 {
            font-size: 1.5rem;
            margin: 10px 0;
        }

         h2 {
            font-size: 1.3rem;
             margin: 7px 0;
        }

        img {
            border-radius: 10px;
            box-shadow: 0 5px 10px -5px #8e8e8e;
        }

        figcaption {
            margin: 5px 0;
            color: slategray;
        }

        dl>* {
            text-align: left;
        }

        dt {
            font-size: 1.1rem;
            margin: 5px 0;
            margin-top: 10px;
        }

        dd {
            color: slategray;
        }

        p {
            margin: 10px 0;
        }
    </style>
</head>
<body>
    <main>
        <section>
            <h1>Welcome on Tab Separator</h1>
            <figure>
                <img src="tab-separator.png" alt="A truly invisible tab separator that you can pin !" />
                <figcaption>Yes it's useless but now you can separate your pinned tabs easely.</figcaption>
            </figure>
            <br>
            <h2>What's this ?</h2>
            <p>
                This website is made for people who needs <br>
                to make some cleaning in pinned tabs without
                tab groups. <br>
                It's truly invisible.
            </p>
            <h2>How to use it ?</h2>
            <p>
                Just let this page opened and pin it. <br>
                Then grab it between these two tabs you want to separate. <br>
                Yes, that's all.
            </p>
            <h2>Privacy</h2>
            <p>
                This application doesn't give anything about you. <br>
                So you won't receive thousands emails, it's not mining Bitcoins (or others) from your computer. <br>
                It's just made to help you. We promise.
            </p>
        </section>
        <section>
            <h2>Others projects</h2>
            <?php
            $projects = [
                [
                    'name' => 'MyIP',
                    'description' => 'You can see your IP without ads in a great purple web page. Without tracking or ads.',
                    'link' => 'myip.plumia.net'
                ],
                [
                    'name' => 'VAT Calculator',
                    'description' => 'You can calculate taxes prices without ads for free in a simple and smouth interface. Without tracking or ads.',
                    'link' => 'tva.plumia.net'
                ],
                [
                    'name' => 'Plumia',
                    'description' => 'It comes from the future : We transform e-waste into working devices. Our planet will be greener.',
                    'link' => 'plumia.net'
                ],
                [
                    'name' => 'Collectivore',
                    'description' => 'A collection manager you can use to know which movies/series/games/books you wan\'t, have and you saw/played/read.',
                    'link' => 'collectivore.io'
                ],
            ];
            ?>
            <dl>
                <?php
                foreach ($projects as $project)
                {
                    ?>
                    <dt><?= $project['name'] ?></dt>
                    <dd><?= $project['description'] ?> <br><a href="https://<?= $project['link'] ?>">Let's gooo</a></dd>
                    <?php
                }
                ?>
            </dl>
        </section>
        <section>
            <h2>Help us</h2>
            <p>
                If you wish to help us, you can pay us a coffee or beer <br>
                (we need both, it only depends what time it is in France).
            </p>
            <form action="https://www.paypal.com/donate" method="post" target="_top">
                <input type="hidden" name="hosted_button_id" value="7LMMJTP5SGJ4A" />
                <input type="image" src="https://www.paypalobjects.com/en_US/FR/i/btn/btn_donateCC_LG.gif" border="0" name="submit" title="PayPal - The safer, easier way to pay online!" alt="Donate with PayPal button" />
                <img alt="" border="0" src="https://www.paypal.com/en_FR/i/scr/pixel.gif" width="1" height="1" />
            </form>
        </section>
    </main>
    <footer>
        &copy; <a href="https://plumia.net">Plumia</a> <?= date('Y') ?>
    </footer>
</body>
</html>