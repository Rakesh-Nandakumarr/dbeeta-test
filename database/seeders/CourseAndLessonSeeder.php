<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\Lesson;
use App\Models\User;
use Illuminate\Database\Seeder;

class CourseAndLessonSeeder extends Seeder
{
    public function run()
    {
        $courses = [
            [
                'title' => 'Mastering Web Development with Laravel',
                'instructor_id' => 1,
                'category' => 'Web Development',
                'description' => 'Learn to build modern web applications using Laravel, one of the most popular PHP frameworks. This course covers everything from setting up your development environment to deploying your application.',
                'lessons' => [
                    ['title' => 'Introduction to Laravel', 'content' => 'An overview of Laravel and its features, why it’s popular, and what you will learn.'],
                    ['title' => 'Setting Up a Laravel Development Environment', 'content' => 'Step-by-step guide to setting up Laravel on your local machine, including installation and configuration.'],
                    ['title' => 'Routing and Controllers in Laravel', 'content' => 'Learn about routing, creating controllers, and handling requests in Laravel.'],
                    ['title' => 'Database Migrations and Eloquent ORM', 'content' => 'Introduction to Laravel’s database migration system and how to interact with the database using Eloquent ORM.'],
                    ['title' => 'Blade Templating Engine', 'content' => 'Learn to create dynamic views using Laravel’s Blade templating engine.'],
                    ['title' => 'Building RESTful APIs with Laravel', 'content' => 'How to build and consume RESTful APIs in Laravel, including authentication and data validation.'],
                    ['title' => 'Deploying Your Laravel Application', 'content' => 'Learn the best practices for deploying a Laravel application to production.'],
                ],
            ],
            [
                'title' => 'React.js: From Beginner to Advanced',
                'instructor_id' => 1,
                'category' => 'Frontend Development',
                'description' => 'A comprehensive guide to React.js, covering everything from the basics to advanced topics. Learn how to build dynamic user interfaces with React.',
                'lessons' => [
                    ['title' => 'Introduction to React', 'content' => 'Understanding what React is, how it works, and why it’s important in modern web development.'],
                    ['title' => 'Setting Up Your React Environment', 'content' => 'How to set up a development environment for React, including installation of necessary tools.'],
                    ['title' => 'Understanding JSX', 'content' => 'Learn what JSX is and how to use it effectively in your React applications.'],
                    ['title' => 'Components and Props', 'content' => 'An in-depth look at React components, props, and how they work together.'],
                    ['title' => 'State Management in React', 'content' => 'Understanding state in React, how to manage it, and when to use different state management solutions.'],
                    ['title' => 'React Hooks: The Future of React', 'content' => 'Learn about React Hooks, how they work, and why they are essential for modern React development.'],
                    ['title' => 'Building a Complete React Application', 'content' => 'Putting it all together by building a complete React application from scratch.'],
                ],
            ],
            [
                'title' => 'Python for Data Science',
                'instructor_id' => 1,
                'category' => 'Data Science',
                'description' => 'A comprehensive course on Python for Data Science, covering data analysis, visualization, machine learning, and more.',
                'lessons' => [
                    ['title' => 'Introduction to Python', 'content' => 'Learn the basics of Python programming and its applications in data science.'],
                    ['title' => 'Data Analysis with Pandas', 'content' => 'How to use Pandas for data manipulation and analysis.'],
                    ['title' => 'Data Visualization with Matplotlib and Seaborn', 'content' => 'Learn to create compelling visualizations using Python libraries.'],
                    ['title' => 'Introduction to Machine Learning', 'content' => 'An overview of machine learning concepts and how to implement them using Python.'],
                    ['title' => 'Building Machine Learning Models with Scikit-Learn', 'content' => 'Learn to build and evaluate machine learning models using Scikit-Learn.'],
                    ['title' => 'Working with Large Datasets in Python', 'content' => 'Best practices for working with large datasets, including data preprocessing and optimization.'],
                    ['title' => 'Final Project: Data Science Capstone', 'content' => 'Apply everything you’ve learned in a real-world data science project.'],
                ],
            ],
            [
                'title' => 'Introduction to Cloud Computing with AWS',
                'instructor_id' => 1,
                'category' => 'Cloud Computing',
                'description' => 'Get started with cloud computing by learning how to use AWS services for building scalable, reliable, and secure applications.',
                'lessons' => [
                    ['title' => 'Understanding Cloud Computing', 'content' => 'Introduction to cloud computing, its benefits, and its various deployment models.'],
                    ['title' => 'Getting Started with AWS', 'content' => 'Learn how to set up your AWS account and navigate the AWS Management Console.'],
                    ['title' => 'Amazon EC2: Virtual Servers in the Cloud', 'content' => 'An introduction to Amazon EC2 and how to launch and manage virtual servers.'],
                    ['title' => 'AWS S3: Scalable Storage in the Cloud', 'content' => 'Learn about AWS S3, its use cases, and how to manage data storage in the cloud.'],
                    ['title' => 'AWS RDS: Managed Relational Databases', 'content' => 'An introduction to AWS RDS and how to set up and manage relational databases in the cloud.'],
                    ['title' => 'Security Best Practices in AWS', 'content' => 'Learn about security best practices in AWS, including identity and access management.'],
                    ['title' => 'Deploying Applications on AWS', 'content' => 'Learn how to deploy and manage applications on AWS, including scaling and monitoring.'],
                ],
            ],
            [
                'title' => 'UI/UX Design Fundamentals',
                'instructor_id' => 1,
                'category' => 'Design',
                'description' => 'Learn the principles of UI/UX design and how to create user-friendly, visually appealing interfaces.',
                'lessons' => [
                    ['title' => 'Introduction to UI/UX Design', 'content' => 'Understand the basics of UI/UX design and its importance in modern product development.'],
                    ['title' => 'Designing User Personas', 'content' => 'Learn how to create user personas to better understand your target audience.'],
                    ['title' => 'Wireframing and Prototyping', 'content' => 'An introduction to wireframing and prototyping tools and techniques.'],
                    ['title' => 'Designing for Mobile vs. Desktop', 'content' => 'Learn the differences between designing for mobile and desktop and best practices for both.'],
                    ['title' => 'Creating Visual Hierarchy in Design', 'content' => 'Understand how to use visual hierarchy to guide users through your interface.'],
                    ['title' => 'User Testing and Feedback', 'content' => 'Learn how to conduct user testing and gather feedback to improve your designs.'],
                    ['title' => 'Final Project: Designing a Complete User Interface', 'content' => 'Apply what you’ve learned by designing a complete user interface for a real-world project.'],
                ],
            ],
            [
                'title' => 'DevOps: CI/CD Pipelines with Jenkins',
                'instructor_id' => 1,
                'category' => 'DevOps',
                'description' => 'Master the art of continuous integration and continuous deployment (CI/CD) with Jenkins, the leading open-source automation server.',
                'lessons' => [
                    ['title' => 'Introduction to DevOps and CI/CD', 'content' => 'Learn the fundamentals of DevOps, CI/CD, and why they are essential in modern software development.'],
                    ['title' => 'Setting Up Jenkins', 'content' => 'Step-by-step guide to installing and configuring Jenkins for your development environment.'],
                    ['title' => 'Creating Your First Jenkins Pipeline', 'content' => 'Learn how to create a basic Jenkins pipeline and understand its core concepts.'],
                    ['title' => 'Automating Builds and Tests with Jenkins', 'content' => 'How to automate the build and testing process using Jenkins.'],
                    ['title' => 'Integrating Jenkins with Git and Other Tools', 'content' => 'Learn how to integrate Jenkins with version control systems like Git and other development tools.'],
                    ['title' => 'Advanced Jenkins Pipeline Techniques', 'content' => 'Explore advanced Jenkins pipeline features and how to use them in complex CI/CD workflows.'],
                    ['title' => 'Monitoring and Troubleshooting Jenkins Pipelines', 'content' => 'Learn best practices for monitoring and troubleshooting Jenkins pipelines to ensure smooth operations.'],
                ],
            ],
            [
                'title' => 'Machine Learning with TensorFlow',
                'instructor_id' => 1,
                'category' => 'Artificial Intelligence',
                'description' => 'A hands-on course that teaches you how to build and deploy machine learning models using TensorFlow, one of the most popular machine learning frameworks.',
                'lessons' => [
                    ['title' => 'Introduction to Machine Learning', 'content' => 'Overview of machine learning, its applications, and why it’s important.'],
                    ['title' => 'Getting Started with TensorFlow', 'content' => 'Learn how to set up TensorFlow and get started with your first machine learning model.'],
                    ['title' => 'Building Neural Networks with TensorFlow', 'content' => 'How to build and train neural networks using TensorFlow.'],
                    ['title' => 'Convolutional Neural Networks (CNNs)', 'content' => 'Introduction to CNNs and how they are used in image recognition and classification tasks.'],
                    ['title' => 'Recurrent Neural Networks (RNNs)', 'content' => 'Learn about RNNs and their applications in sequence prediction tasks.'],
                    ['title' => 'Deploying Machine Learning Models', 'content' => 'Best practices for deploying machine learning models to production.'],
                    ['title' => 'Final Project: Building a Machine Learning Application', 'content' => 'Apply what you’ve learned by building a complete machine learning application from scratch.'],
                ],
            ],
            [
                'title' => 'Cybersecurity Essentials',
                'instructor_id' => 1,
                'category' => 'Cybersecurity',
                'description' => 'Learn the fundamentals of cybersecurity, including how to protect systems and data from cyber threats.',
                'lessons' => [
                    ['title' => 'Introduction to Cybersecurity', 'content' => 'Understand the importance of cybersecurity and the various types of cyber threats.'],
                    ['title' => 'Network Security Basics', 'content' => 'Learn about network security fundamentals, including firewalls, intrusion detection, and prevention systems.'],
                    ['title' => 'Understanding Encryption', 'content' => 'An introduction to encryption techniques and how they are used to protect data.'],
                    ['title' => 'Identity and Access Management', 'content' => 'Learn how to manage user identities and access to systems and data securely.'],
                    ['title' => 'Securing Web Applications', 'content' => 'Best practices for securing web applications against common vulnerabilities.'],
                    ['title' => 'Incident Response and Disaster Recovery', 'content' => 'Learn how to prepare for and respond to cybersecurity incidents and disasters.'],
                    ['title' => 'Final Project: Creating a Cybersecurity Plan', 'content' => 'Apply what you’ve learned by creating a comprehensive cybersecurity plan for an organization.'],
                ],
            ],
            [
                'title' => 'Introduction to Blockchain Technology',
                'instructor_id' => 1,
                'category' => 'Blockchain',
                'description' => 'Understand the basics of blockchain technology, its applications, and how to develop smart contracts.',
                'lessons' => [
                    ['title' => 'What is Blockchain?', 'content' => 'Learn the fundamentals of blockchain technology and how it works.'],
                    ['title' => 'Cryptocurrency and Blockchain', 'content' => 'Understand the relationship between blockchain and cryptocurrencies like Bitcoin and Ethereum.'],
                    ['title' => 'Smart Contracts 101', 'content' => 'Introduction to smart contracts and how they are used in blockchain applications.'],
                    ['title' => 'Developing Smart Contracts with Solidity', 'content' => 'Learn how to write and deploy smart contracts using the Solidity programming language.'],
                    ['title' => 'Decentralized Applications (DApps)', 'content' => 'Understand what DApps are and how to develop them using blockchain technology.'],
                    ['title' => 'Blockchain Security', 'content' => 'Learn about the security aspects of blockchain and how to protect your blockchain applications.'],
                    ['title' => 'Final Project: Building a Blockchain Application', 'content' => 'Apply what you’ve learned by building a complete blockchain application from scratch.'],
                ],
            ],
            [
                'title' => 'Java Programming for Beginners',
                'instructor_id' => 1,
                'category' => 'Programming',
                'description' => 'An introductory course to Java programming, covering the basics and moving towards object-oriented programming concepts.',
                'lessons' => [
                    ['title' => 'Getting Started with Java', 'content' => 'Introduction to Java, setting up your environment, and writing your first Java program.'],
                    ['title' => 'Java Basics: Variables, Data Types, and Operators', 'content' => 'Learn about Java variables, data types, and operators.'],
                    ['title' => 'Control Flow Statements in Java', 'content' => 'Understand how to use control flow statements like loops and conditionals in Java.'],
                    ['title' => 'Object-Oriented Programming in Java', 'content' => 'Introduction to object-oriented programming concepts in Java, including classes and objects.'],
                    ['title' => 'Working with Java Collections', 'content' => 'Learn about Java collections framework and how to use it effectively.'],
                    ['title' => 'Exception Handling in Java', 'content' => 'Understand how to handle exceptions and errors in your Java programs.'],
                    ['title' => 'Final Project: Building a Java Application', 'content' => 'Apply what you’ve learned by building a complete Java application from scratch.'],
                ],
            ],
            [
                'title' => 'Artificial Intelligence in Game Development',
                'instructor_id' => 1,
                'category' => 'Game Development',
                'description' => 'Learn how to integrate artificial intelligence (AI) into game development to create smarter, more interactive games.',
                'lessons' => [
                    ['title' => 'Introduction to AI in Games', 'content' => 'Understand the basics of AI and how it’s used in game development.'],
                    ['title' => 'Pathfinding Algorithms for Game AI', 'content' => 'Learn about pathfinding algorithms like A* and how they are used in games.'],
                    ['title' => 'AI for NPC Behavior', 'content' => 'Understand how to implement AI for non-player character (NPC) behavior in games.'],
                    ['title' => 'Decision-Making in Game AI', 'content' => 'Learn how to implement decision-making systems in game AI, such as finite state machines.'],
                    ['title' => 'Machine Learning in Games', 'content' => 'Introduction to using machine learning techniques in game AI.'],
                    ['title' => 'Optimizing Game AI Performance', 'content' => 'Learn how to optimize the performance of AI in games to ensure smooth gameplay.'],
                    ['title' => 'Final Project: Creating an AI-Driven Game', 'content' => 'Apply what you’ve learned by creating a complete AI-driven game from scratch.'],
                ],
            ],
            [
                'title' => 'Full-Stack Web Development with MERN',
                'instructor_id' => 1,
                'category' => 'Web Development',
                'description' => 'Learn to build full-stack web applications using the MERN stack (MongoDB, Express.js, React, Node.js).',
                'lessons' => [
                    ['title' => 'Introduction to the MERN Stack', 'content' => 'Understand what the MERN stack is and why it’s popular for full-stack web development.'],
                    ['title' => 'Setting Up Your MERN Development Environment', 'content' => 'Step-by-step guide to setting up a development environment for the MERN stack.'],
                    ['title' => 'Building RESTful APIs with Node.js and Express.js', 'content' => 'Learn how to create RESTful APIs using Node.js and Express.js.'],
                    ['title' => 'Managing Data with MongoDB', 'content' => 'Introduction to MongoDB and how to use it to manage data in your MERN applications.'],
                    ['title' => 'Frontend Development with React', 'content' => 'Learn how to build the frontend of your application using React.'],
                    ['title' => 'Integrating React with Node.js', 'content' => 'Learn how to integrate the frontend and backend of your application using React and Node.js.'],
                    ['title' => 'Deploying MERN Applications', 'content' => 'Learn the best practices for deploying MERN applications to production.'],
                ],
            ],
            [
                'title' => 'Advanced SQL Queries and Database Design',
                'instructor_id' => 1,
                'category' => 'Database Management',
                'description' => 'Take your SQL skills to the next level with advanced queries and learn how to design efficient database schemas.',
                'lessons' => [
                    ['title' => 'Introduction to Advanced SQL', 'content' => 'Overview of advanced SQL topics and their importance in database management.'],
                    ['title' => 'Subqueries and Complex Joins', 'content' => 'Learn how to write subqueries and complex joins to extract data from multiple tables.'],
                    ['title' => 'Working with Views and Indexes', 'content' => 'Understand how to create and use views and indexes to optimize database performance.'],
                    ['title' => 'Database Normalization and Denormalization', 'content' => 'Learn about database normalization and denormalization techniques and when to use them.'],
                    ['title' => 'Stored Procedures and Triggers', 'content' => 'Introduction to stored procedures and triggers in SQL and how to use them effectively.'],
                    ['title' => 'Optimizing SQL Queries for Performance', 'content' => 'Best practices for optimizing SQL queries to improve database performance.'],
                    ['title' => 'Final Project: Designing a Database Schema', 'content' => 'Apply what you’ve learned by designing a complete database schema for a real-world application.'],
                ],
            ],
            [
                'title' => 'Agile Project Management with Scrum',
                'instructor_id' => 1,
                'category' => 'Project Management',
                'description' => 'Learn the principles of Agile project management and how to implement Scrum in your projects for better team collaboration and faster delivery.',
                'lessons' => [
                    ['title' => 'Introduction to Agile Project Management', 'content' => 'Overview of Agile project management principles and their benefits.'],
                    ['title' => 'Getting Started with Scrum', 'content' => 'Learn about Scrum, its roles, and how to get started with it.'],
                    ['title' => 'Planning and Estimation in Scrum', 'content' => 'Understand how to plan and estimate work in Scrum, including sprint planning.'],
                    ['title' => 'Running Effective Scrum Meetings', 'content' => 'Learn how to run daily standups, sprint reviews, and retrospectives effectively.'],
                    ['title' => 'Managing a Scrum Team', 'content' => 'Best practices for managing and motivating a Scrum team.'],
                    ['title' => 'Scaling Scrum for Large Projects', 'content' => 'Learn how to scale Scrum for larger projects with multiple teams.'],
                    ['title' => 'Final Project: Implementing Scrum in a Project', 'content' => 'Apply what you’ve learned by implementing Scrum in a real or simulated project.'],
                ],
            ],
        ];

        foreach ($courses as $course) {
            $createdCourse = Course::create([
                'title' => $course['title'],
                'instructor_id' => $course['instructor_id'],
                'category' => $course['category'],
                'description' => $course['description'],
            ]);

            foreach ($course['lessons'] as $lesson) {
                Lesson::create([
                    'course_id' => $createdCourse->id,
                    'title' => $lesson['title'],
                    'content' => $lesson['content'],
                ]);
            }
        }
    }
}

