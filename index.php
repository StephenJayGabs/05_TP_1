<html>
    <head>
        <title>Laboratory Exercise 2</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link rel="stylesheet" href="style.css"/>
    </head>
    <body>
    <?php
    
        $FirstName = "Juan";
        $LastName = "Dela Cruz";
        
        $menuItems = ["Home", "Subjects", "Assignment", "Quiz", "About"];
        $programmingSubjects = [
            [
                "title" => "Web Programming",
                "logo" => "html.png",
                "topics" => ["HTML, CSS, and JavaScript", "PHP", "ASP.NET"]
            ],
            [
                "title" => "Mobile Programming",
                "logo" => "android.png",
                "topics" => ["Android", "IOS", "Windows"]
            ],
            [
                "title" => "Desktop Programming",
                "logo" => "java.png",
                "topics" => ["Java", "C#.Net", "Visual Basic"]
            ]
        ];
    
    ?>
	
    <div class="row header-content">
        <div class="column-12">
            <?php echo "$FirstName ". "$LastName"?>
        </div>
    </div> 
    <div class="row">
        <div class="column-3 border-profile">
            <div class="row">
                <div class="column-12">
                    <img src="login_logo.png"/>
                </div>
            </div>
            <div class="row">
                <div class="column-12">
                    <p>Name: <?php echo "$FirstName ". "$LastName"?></p>
                </div>
            </div>
            <div class="row">
                <div class="col-12 menu">
                    <ul>
                        <?php foreach($menuItems as $menuItem): ?>
                        <li>
                            <?php echo $menuItem;?>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </div> 
        <div class="column-9">
            <div class="row">
                <?php foreach($programmingSubjects as $subject): ?>
                <div class="column-4 menu">
                    <div class="border-subjects">
                        <div class="row">
                            <div class="column-12">
                                <img src="<?php echo $subject["logo"]?>"/>
                            </div>
                        </div>
                        <div class="row">
                            <div class="column-12">
                                <ul>   
                                    <li class="subject">
                                        <?php echo $subject["title"];?>
                                    </li>
                                    <?php foreach($subject["topics"] as $topic): ?>
                                    <li>
                                        <?php echo $topic;?>
                                    </li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    </body>
</html>  