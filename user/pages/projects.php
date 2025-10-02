<section class="projects-section">
    <div class="projects-container">
        <h1>My Projects</h1>
        <p class="section-description">Here are some of my recent works and projects</p>
        
        <div class="project-grid">
            <?php
            // Projects will be dynamically loaded from database
            // Sample static projects for now
            $projects = [
                [
                    'title' => 'E-Commerce Website',
                    'description' => 'A fully functional e-commerce platform with payment integration',
                    'technologies' => 'PHP, MySQL, JavaScript',
                    'image' => 'user/images/project1.jpg'
                ],
                [
                    'title' => 'Portfolio CMS',
                    'description' => 'Content management system for portfolio websites',
                    'technologies' => 'PHP, MySQL, Bootstrap',
                    'image' => 'user/images/project2.jpg'
                ],
                [
                    'title' => 'Task Manager App',
                    'description' => 'A productivity app for managing daily tasks',
                    'technologies' => 'React, Node.js, MongoDB',
                    'image' => 'user/images/project3.jpg'
                ]
            ];
            
            foreach ($projects as $project): ?>
                <div class="project-card">
                    <div class="project-image">
                        <img src="<?php echo $project['image']; ?>" alt="<?php echo $project['title']; ?>" onerror="this.src='user/images/placeholder.jpg'">
                    </div>
                    <div class="project-info">
                        <h3><?php echo $project['title']; ?></h3>
                        <p><?php echo $project['description']; ?></p>
                        <div class="project-tech">
                            <strong>Technologies:</strong> <?php echo $project['technologies']; ?>
                        </div>
                        <div class="project-links">
                            <a href="#" class="btn-view">View Details</a>
                            <a href="#" class="btn-demo">Live Demo</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
