<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="public/css/style.css">
    <link rel="stylesheet" type="text/css" href="public/css/projects.css">

    <script src="https://kit.fontawesome.com/fffd297577.js" crossorigin="anonymous"></script>
    <title>PROJECTS</title>
</head>

<body>
    <div class="base-container">
        <nav>
            <img src="public/img/logo.svg">
            <ul>
                <li>
                    <i class="fas fa-project-diagram"></i>
                    <a href="#" class="button">projects</a>
                </li>
                <li> 
                    <i class="fas fa-user-friends"></i>
                    <a href="#" class="button">friends</a>
                </li>
                <li>
                    <i class="far fa-comment-dots"></i>
                    <a href="#" class="button">messages</a>
                </li>
                <li>
                    <i class="fas fa-bell"></i>
                    <a href="#" class="button">notification</a>
                </li>
                <li>
                    <i class="fas fa-cog"></i>
                    <a href="#" class="button">settings</a>
                </li>
            </ul>
        </nav>
        <main>
            <header>
                <div class="search-bar">
                    <form>
                        <input placeholder="search project">
                    </form>
                </div>
                <div class="add-project">
                    <i class="fas fa-plus"></i>
                    add project
                </div>
            </header>
            <section class="project-form">
                <h1>UPLOAD</h1>
                <form action="addProject" method="POST" enctype="multipart/form-data">
                    <?php if(isset($messages)) {
                        foreach ($messages as $message) {
                            echo $message;
                        }
                    }
                    ?>
                    <input name="title" type="text" placeholder="title">
                    <textarea name="description" rows="5" placeholder="description"></textarea>
                    <input type="file" name="file">
                    <button type="submit">send</button>
                </form>
            </section>
        </main>

    </div>
</body>