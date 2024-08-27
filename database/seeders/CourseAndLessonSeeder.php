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
                'price' => 19999,
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
                'price' => 17999,
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
                'price' => 20999,
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
                'price' => 22999,
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
                'price' => 15999,
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
                'price' => 18999,
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
                'price' => 23999,
                'lessons' => [
                    ['title' => 'Introduction to TensorFlow', 'content' => 'Learn the basics of TensorFlow and how it can be used for machine learning tasks.'],
                    ['title' => 'Building Neural Networks with TensorFlow', 'content' => 'How to create and train neural networks using TensorFlow.'],
                    ['title' => 'Working with TensorFlow Datasets', 'content' => 'Learn how to load and preprocess datasets for use in TensorFlow.'],
                    ['title' => 'Implementing Advanced Machine Learning Models', 'content' => 'Explore advanced machine learning models and techniques using TensorFlow.'],
                    ['title' => 'Deploying TensorFlow Models', 'content' => 'Learn how to deploy TensorFlow models to production environments.'],
                    ['title' => 'Evaluating Model Performance', 'content' => 'Understand how to evaluate and improve the performance of your machine learning models.'],
                    ['title' => 'Capstone Project: Building a Complete Machine Learning Application', 'content' => 'Apply your skills in a final project that involves building and deploying a complete machine learning application.'],
                ],
            ],
            [
                'title' => 'Effective Project Management with Agile',
                'instructor_id' => 1,
                'category' => 'Project Management',
                'description' => 'Learn how to manage projects effectively using Agile methodologies, including Scrum and Kanban.',
                'price' => 16999,
                'lessons' => [
                    ['title' => 'Introduction to Agile Project Management', 'content' => 'An overview of Agile methodologies and their benefits in project management.'],
                    ['title' => 'Scrum Framework Fundamentals', 'content' => 'Learn the basics of Scrum, including roles, ceremonies, and artifacts.'],
                    ['title' => 'Kanban: Visualizing and Managing Work', 'content' => 'Introduction to Kanban, including how to implement it and use it to manage workflows.'],
                    ['title' => 'Agile Planning and Estimation', 'content' => 'Learn techniques for planning and estimating work in an Agile environment.'],
                    ['title' => 'Managing Agile Teams', 'content' => 'Best practices for leading and managing Agile teams to ensure successful project outcomes.'],
                    ['title' => 'Agile Metrics and Reporting', 'content' => 'Learn how to measure and report on Agile project progress and performance.'],
                    ['title' => 'Final Project: Agile Project Management Simulation', 'content' => 'Apply Agile principles in a project management simulation to gain practical experience.'],
                ],
            ],
            [
                'title' => 'Cybersecurity Essentials',
                'instructor_id' => 1,
                'category' => 'Cybersecurity',
                'description' => 'A course covering the fundamental principles of cybersecurity and how to protect systems and data from various threats.',
                'price' => 19999,
                'lessons' => [
                    ['title' => 'Introduction to Cybersecurity', 'content' => 'Learn the basics of cybersecurity, including key concepts and terminologies.'],
                    ['title' => 'Understanding Cyber Threats and Vulnerabilities', 'content' => 'Explore different types of cyber threats and vulnerabilities that affect systems and data.'],
                    ['title' => 'Implementing Security Controls', 'content' => 'Learn how to implement various security controls to protect against cyber threats.'],
                    ['title' => 'Incident Response and Management', 'content' => 'Understand how to respond to and manage cybersecurity incidents effectively.'],
                    ['title' => 'Securing Networks and Systems', 'content' => 'Best practices for securing networks and systems to prevent unauthorized access and attacks.'],
                    ['title' => 'Cybersecurity Compliance and Regulations', 'content' => 'Learn about various compliance requirements and regulations related to cybersecurity.'],
                    ['title' => 'Capstone Project: Cybersecurity Risk Assessment', 'content' => 'Apply your knowledge in a capstone project focused on assessing and mitigating cybersecurity risks.'],
                ],
            ],
        ];
        

        foreach ($courses as $course) {
            $createdCourse = Course::create([
                'title' => $course['title'],
                'instructor_id' => $course['instructor_id'],
                'category' => $course['category'],
                'price' => $course['price'],
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

