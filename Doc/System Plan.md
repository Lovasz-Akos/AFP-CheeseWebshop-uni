# 1. Overview 

## 1.1 About this document

Our team has decided to create a fully functional website for people who would like to enjoy a wide vareity of cheeses without leaving the comforts of their homes, by providing a shop that offers deliveries of our whole selection. This document describes the project in detail, including the website's functionality, the team members, their roles and responsibilities, technologies we use in this project, development plans etc.

## 1.2 Project Overview:

The development team uses multiple technologies and software that that are described in this document. Furthermore, the Business Requirements, the development phases and goals of this project will be documented here. 

The following resources and documents will be used during the developement:
- The Functional Requirements of the project
- The database structure and plan
- The laws and industry standards that this project is subjected
- Regulations
- Terms and conditions
- Cookies
- Logging
- Privacy policies like: advertising policies and third party privacy policies
- CCPA and GDPR data protection rights

Some additional information:
- We are responsible for a website, that introduces headphone and headsets with their certain additionals.
- Develop a platform where users can choose from plenty of goods.
- Compare items
- Get a long description about the chosen headphone or headset
- Look for the best price/value products
- Provide a comfortable shopping experience

# 2. Project plan
## 2.1 Roles and responsibilities
### Backend developer:
Backend developers are responsible for developing the server-side code, they create the website's functions, and the data structures. They mainly use PHP codes.
### Frontend developer:
Frontend developers implement the visual elements that users see and interact with in the website. They make sure that users have no trouble navigating the website. They use HTML, CSS, JavaScript codes.
### Database developer:
Database developers are responsible for the storage and management of the data we use in this website. 

## 2.2 Team members

- Krigovszki Bálint - Full-stack developer
- Szenczi Boldizsár - Full-stack developer
- Lovász Ákos - Full-stack developer

- Dombi Tibor Dávid - Senior developer, supervisor
- Balog Balázs - Supervisor

## 2.3 Project schedule

- 2021/02/25 Requirement and Functional specification documents
- 2021/03/01 System Plan
- 2021/03/04 Development start (Sprint 1)
- 2021/03/18 Development (Sprint 2)
- 2021/04/01 Introduce our project with a demo (+ Development Sprint 3)
- 2021/04/15 Development (Sprint 4), testing
- 2021/04/29 Development finish(Sprint 5), testing
- 2021/05/06 Review, project finish

## 2.4 Technologies
### Web framework – Bootstap
Bootstap will be used to make the dynamic layout of the webshop, so it works smoothly on all resolutions in the browsers.

### Web server – Apache
An Apache web server will be used to store the database information, in which we will store the database writen in MySQL structure.

### Programming language – PHP
We are going to write our code in PHP, since it is the most used programming language for building websites. The PHP version which is going to be used is PHP 7.4 or higher since Laravel needs that environment.

### Data structure store – MySQL
The database structure will be written accordig to the MySQL standards. Recommended version: MySQL 8.0

### Communication – Discord, GitHub, Trello
- Discord is a communication software made for voice chat. Since Discord is free we are gonna use this software, because it is not sure that all of us will be in the same room when our company develops the webshop the client asked for. With this we will be able to communicate in real time with our coding partners, and since it has a normal chat function that follows the written messages, it will be easy to trace back with the problems that are brought up during development.

- GitHub is a free repository where the project will be stored during development. With this we can share and retrivel the versions of our work, and if something is not working we can reroll the changes so we don't have to start from the beginning.

- Trello is a free web-based Kanban-style list-making application. We can create our task boards with several columns and move the tasks between them. Typically columns include task statuses: To Do, In Progress and Done.


# 3. Business model
![Business Model](/Doc/Figures/BM.png)

# 4. Requirements
## 4.1 Functional Requirements

Using common website elements and user management system:
- **Register:** The users should be able to sign up. This is also required for shopping and to use the shopping cart. After registration they will have a Profile Page.
- **Logging in and out:** Editors and users should be able to log in and out.
- **Possibility to change password:** Users' passwords should be changeable.
- **Profile details:** Users should be able to see and modify their profile details.
- **Data modification:** The user should be able to modify his/her personal information at the Profile Page.
- **Navigation to different pages:** Users should be able to navigate to any pages.
- **Permission rules:** Some pages require to login first before navigation.

Webshop functions:
- **Showing cards:** Users can easily separate the items and its descriptions when we show them as cards. 
- **Listing items, browsing:** The customer should be able to look around between the products and filter the them in the website.
- **Shopping cart:** The customer should be able to add or remove products to his/her cart.
- **Product details:** The customer should be able to see our products' details in a separate page.

## 4.2 Non-funtional Requirements
The site must (be):
- Easy to use
- User-friendly
- Navigate to the corresponding page
- Show error messages in different and consistent location and style
- Have control panels, button (some of them hidden from the general users)
- Have permission system
- Fit the EU Privacy Policy requirements

Supported browsers:
- Mozilla Firefox
- Microsoft Edge
- Google Chrome
## 4.3 Resources:
- Fully functional database with tables and relations
- Secure connection
- Intuitive/easy to use interface
- Creative front-end palette
- Based on PHP language and the user's demands

# 5. Functions
## 5.1 Participants
The website has two user levels:
- Customer
- Administrator

## 5.2 Use cases and scenarios

### Customer:
- Able to register a new account
- Able to log in to their account
- Able to log out of their account
- Able to change their password
- Able to see their profile page
- Able to edit their profile page
- Able to see the home page
- Able to see the product listings by category
- Can filter through the products
- Can open a product and see its detailed description page
- Able to add products to their cart
- Able to finish the order

### Administrator:
- Has all the user privileges
- Able to add a new product
- Can modify an existing product
- Able to remove a product
- Able to set discount on products
- Has access to and able to see all the orders from other users


# 6. Physical environments
-   Software and external systems we're working with:
    -   Sublime Text Editor
    -   PhpStorm
    -   Gitkraken/Github
    -   Trello
    -   Visual Studio Code
    -   Discord

-   Hardware and Network:
    -   General hardware and network requirements

-   Development tools:
    -   Visual Studio Code
    -   PhpStorm
    -   Sublime Text Editor

-   Technologies:
    -   Bootstrap
    -   Apache
    -   PHPMyAdmin
    -   MySQL
    -   PHP
    -   Node.js


# 7. Architecture plan
## Backend
The system needs a database system, so we are using a Visual Studio based client, where we store the user's data and the products. The web client is based on PHP technologies, which helps the client to be stable. Also we can create amazing content for the users. Furthermore, it will be used to create the website's functions, handle user data and article content.
## Frontend
The frontend is using HTML and CSS codes.

# 8. Database plan

## 8.1 Objects

### Users

Users are registered accounts on the website.
- **id:** A unique identification number that is assigned at registration to every user. 
- **username:** A unique username required for creating an account.
- **first_name:** First name of the user.
- **last_name:** Last name of the user.
- **email:** Email address of the user. (used for sending order and account information)
- **password:** A one way hashed password that is required to log in to an account.
- **address:** Shipping/billing address for this user.
- **zip_code:** The user's zip code.
- **permission:** Permission level of the user.
	- 0 = User
	- 1 = Administrator

### Products
Products are all kinds of cheese that are being sold on the website.
- **id:** An unique identification number, that is automatically incremented.
- **product_name:** The name of the product.
- **product_brand:** The brand of the product.
- **category:** Category the product belongs to.
- **price:** A path that shows the location of and image of the product.
- **in_stock:** Numeric value that indicates how many are available to order.
- **image:** Product image file name.
- **description:** Detailed description of the product.
- **short_description:** Shortened description of the product.

### Orders
Customers' orders will be stored here with all the necessary information for shipping.
- **id:** Unique identification number for each order.
- **user_id:** The identification number of the user who made the order.
- **first_name:** First name of the customer.
- **last_name:** Last name of the customer.
- **address:** Shipping/billing address of the customer.
- **zip_code:** The customer's zip code.
- **city:** The city the customer is located in.
- **country:** The country the customer is located in.
- **complete:** Order status.
- **order_time:** The date and time of the order.


## 8.2 Helper tables

### Cart
The cart contains the products the customer would like to order.
- **user_id:** The id of the user
- **product_id:** The id of the product
- **amount:** The amount of the product the customer would like to order.
 
### Package
 The package contains the items of each order.
 - **product_id:** The identification number of the product that has been ordered.
 - **order_id:** The identification number of the order this package belongs to.
 - **amount:** Amount of the item that the package has.

  ### Database Plan
  ![Database Plan](/Doc/Figures/Database_Plan.png)


# 9. Implementation plan
In our project we are using PHP as our programming technology since it is our best option for web development. Furthermore since we're using Laravel, the version of PHP have to be 7.2 or higher to be compatible with it.

# 10. Test plan
