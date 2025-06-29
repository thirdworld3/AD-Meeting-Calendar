<a name="readme-top">

<br/>

<br />
<div align="center">
  <a href="https://github.com/zyx-0314/">
    <img src="./assets/img/arcalogo.png" alt="ARCA" width="130" height="100">
  </a>
  <h3 align="center">AD-Meeting Calendar</h3>
</div>


<br />


![](https://visit-counter.vercel.app/counter.png?page=thirdworld3/AD-Meeting-Calendar)

[![wakatime](https://wakatime.com/badge/user/7a950e16-a8aa-43b5-aee2-21dafd140a27/project/329d9ba1-a2b0-40df-84bb-6017c224a8e9.svg)](https://wakatime.com/badge/user/7a950e16-a8aa-43b5-aee2-21dafd140a27/project/329d9ba1-a2b0-40df-84bb-6017c224a8e9)

---

<br />
<br />

<details>
  <summary>Table of Contents</summary>
  <ol>
    <li>
      <a href="#overview">Overview</a>
      <ol>
        <li>
          <a href="#key-components">Key Components</a>
        </li>
        <li>
          <a href="#technology">Technology</a>
        </li>
      </ol>
    </li>
    <li>
      <a href="#rule,-practices-and-principles">Rules, Practices and Principles</a>
    </li>
    <li>
      <a href="#resources">Resources</a>
    </li>
  </ol>
</details>

---

## Overview

Meeting Calendar Project

### Key Components

- Authentication & Authorization
- CRUD Operations for Invetory System

### Technology

#### Language
![HTML](https://img.shields.io/badge/HTML-E34F26?style=for-the-badge&logo=html5&logoColor=white)
![CSS](https://img.shields.io/badge/CSS-1572B6?style=for-the-badge&logo=css3&logoColor=white)
![JavaScript](https://img.shields.io/badge/JavaScript-F7DF1E?style=for-the-badge&logo=javascript&logoColor=white)
![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)


#### Databases
![MySQL](https://img.shields.io/badge/MySQL-00758F?style=for-the-badge&logo=mysql&logoColor=white)
![MongoDB](https://img.shields.io/badge/MongoDB-47A248?style=for-the-badge&logo=mongodb&logoColor=white)
![PostgreSQL](https://img.shields.io/badge/PostgreSQL-336791?style=for-the-badge&logo=postgresql&logoColor=white)


## Rules, Practices and Principles

<!-- Do not Change this -->

1. Always use `AD-` in the front of the Title of the Project for the Subject followed by your custom naming.
2. Do not rename `.php` files if they are pages; always use `index.php` as the filename.
3. Add `.component` to the `.php` files if they are components code; example: `footer.component.php`.
4. Add `.util` to the `.php` files if they are utility codes; example: `account.util.php`.
5. Place Files in their respective folders.
6. Different file naming Cases
   | Naming Case | Type of code         | Example                           |
   | ----------- | -------------------- | --------------------------------- |
   | Pascal      | Utility              | Accoun.util.php                   |
   | Camel       | Components and Pages | index.php or footer.component.php |
8. Renaming of Pages folder names are a must, and relates to what it is doing or data it holding.
9. Use proper label in your github commits: `feat`, `fix`, `refactor` and `docs`
10. File Structure to follow below.

```
AD-Meeting-Calendar
└─ assets
|   └─ css
|   |   └─ example.css
|   └─ img
|   |   └─ arcalogo.png
|   └─ js
|       └─ example.js
└─ components
|   └─ componentGroup
|   └─ templates
|      └─ example.component.php
|
└─ database
|   └─ nameOfModels.model.sql
|   └─ project_users.model.sql
|   └─ projects.model.sql
|   └─ tasks.model.sql
|   └─ users.model.sql
|
└─ handlers
|   └─ example.handler.php
|   └─ mongodbChecker.handler.php
|   └─ postgreChecker.handler.php
└─ layout
|   └─ example.layout.php
└─ pages
|  └─ExamplePage
|     └─ assets
|     |  └─ css
|     |  |  └─ example.css
|     |  └─ img
|     |  |  └─ nyebe_white.png
|     |  └─ js
|     |     └─ example.js
|     └─ index.php
└─ staticData
|  └─ example.staticdata.php
└─ utils
|   └─ example.utils.php
|   └─ dbResetPostgresql.util.php
|   └─ dbSeedPostgresql.util.php
|   └─ envSetter.util.php
|   └─ htmlEscape.util.php
└─ vendor
|   └─ autoload.php
|     └─ composer
|         └─ autoload_classmap.php
|         └─ autoload_files.php
|         └─ autoload_namespaces.php
|         └─ autoload_psr4.php
|         └─ autoload_real.php
|         └─ autoload_static.php
|         └─ ClassLoader.php
|         └─ installed.json
|         └─ installed.php
|         └─ InstalledVersions.php
|         └─ LICENSE
|         └─ platform_check.php
└─ .gitignore
└─ bootstrap.php
└─ composer.json
└─ composer.lock
└─ Dockerfile
└─ index.php
└─ README.Docker.md
└─ readme.md
└─ router.php
```
> The following should be renamed: name.css, name.js, name.jpeg/.jpg/.webp/.png, name.component.php(but not the part of the `component.php`), Name.utils.php(but not the part of the `utils.php`)

## Resources

| Title        | Purpose                                                                       | Link          |
| ------------ | ----------------------------------------------------------------------------- | ------------- |
| ChatGPT | Coding, Structure, and detailed guidance. | https://chatgpt.com/ |
