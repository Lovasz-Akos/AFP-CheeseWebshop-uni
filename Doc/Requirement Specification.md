# Requirement Specification


# 1. Introduction

We are a small, three man developer team aiming to create the greatest cheese shop anyone has ever seen. 
Our shared love for cheese lets us work together in a harmonic way, allowing us to achieve our goals 
faster and more efficiently. Our focus is currently on dynamic websites and webshops. 
We create these sites with the help of the Laravel framework, but we can use different technologies if needed.

# 2. Current State

We have studied the market for the last year and it is quite obvious that there is a market gap for a quality, accessible webshop that offers a wide vareity of cheesees. To meet this need in the market, we decided to create a website where you can browse our offerings and order cheese to be delivered right into the customer's hands.

# 3. Scope

Our vision is to have an online website, where we can sell our products to our customers without them having to travel to our shop. On this website they can browse all of our products in store and see details about them. After choosing their desired product, they have the option to purchase it on the website. After that, our team can see the order on the website, and manage it. The shipping process then can be done manually by one of our employees. Besides that, we would like to have a user management system where our customers can register, fill out their personal information like their name and shipping address, so they can purchase with their account easily.

# 4. Functional Requirements

If you want to see about the funcional requirements you can find out more in the point 8. of the doc, in the 'Request list'.

# 5. Standards & Laws

## General Standards
Application must meet the following general standards:

1.  Must be easily understandable and easy to use for the users.
2.  Must function in a logical manner for the users.
3.  Must use the industry best practices.
4.  Must use styles that are consistent throughout the application and within the associated Web site, including:

-   Error messages must appear in a consistent location and style.
-   Form controls that are not available must be hidden.

## Browser Requirements
 - Google Chrome
 - Mozilla Firefox
 - Opera
 
## Online Shop Regulations
**Definitions:**

1. The Salesman in the cheese shop
2. The Customer - The person who is looking forward of using the website for ordering cheese, who must be at least 14 years of age.
3. The Webshop - The internet service where a person can order an item they are looking for.
4. The Products - The items (in this case the cheese) which are presented in the webshop.
5. Regulations - Rules of the online shop.

**General provisions:**

1.  Online shop is run by the seller.
2.  The regulations define the rules for the conclusion between the seller and the customer contracts for the sale of goods by means of distance communication and use by customers of the online store.
3.  Information about the price given in the online store is binding from the moment of receipt of the e-mails. After successful submission of the order, this price will not change regardless of changes in the prices in the store, which may arise in relation to particular goods.
4.  Photos of the goods are placed in the online store for exemplary purposes only and are specifically indicated in the presentation of the goods.
5.  Prerequisite for a successful placing an order, is to provide accurate and real data at registration as well as at the Order Page.

**The scope of the terms and conditions of use the online shop:**

1.  To use the service provided by the online store, the customer need to recognize these rules and accept them.
2.  The provided information in the registration form and Order Page should be truthful and current. If the customer provides incorrect or outdated information, in particular as regards to the personal data of the customer, the seller is not obliged to carry out orders. It is prohibited to transfer or make available by the customer illegal content or infringe the rights of third parties.
3.  Seller shall take the necessary technical and organizational measures to prevent acquisition and modification data provided by the customer during registration and when ordering by unauthorized users.

**Placing an order:**

1.  Orders for goods available in the online shop are made through the Order Page, available in the store.
2.  Placing an order through Order Page is possible around the clock, every day of the week. Orders placed on weekdays will be implemented on an ongoing basis. Orders placed on Saturdays, Ssundays and holidays will be implemented no earlier than the next business day.
3.  An order shall be made by logging in to the store, addition of the goods to the shopping cart and confirmation of the order. In the absence of the customer registration in the online shop placing an order is not possible.
4.  Sending the order by the customer constitutes an offer submitted by the customer to the seller to enter into a contract of sale, in accordance with the regulations.
5.  After sending the order the customer receives confirmation of acceptance of his offer by electronic means (confirmation of the order), at the e-mail address indicated by the customer. After receiving above-mentioned acceptance agreement of sale is valid.


# 6. Current Business Model

Our team is currently in great obsession of cheese and because of this we have decided to open our own cheese webshop so we can share this love for cheese with other people. Our webshop is going to feature all kinds of cheese from the very common to the quite rare ones. If a customer is completely new to the world of cheese and can't decide which cheese to buy that's no problem either as the customers can contact us to recommend different types of cheese to them based on their taste and need.

Before we can release our webshop we will do our research on different cheese types in order for better understanding when categorizing or recommending them to customers. For example, our customer has access to a small variety of cheese because of not living im a major city or a bigger town. In this case our webshop is a great choice to try numerous types of cheese that the customer does not have access to for some reasons. Items can be easily ordered through our webshop so there's no need to travel far for experiencing new cheeses or just restocking.

From our point of view ordering an item online is a much more convenient way than taking any public transport to visit a store and spend maybe hours getting there and looking for the specific item the customer wants. Ordering cheeses online can come in handy especially if the customer doesn't have much free time because of work schedules for example. Of course the main advantage of online orders is not dealing with people on the way or in the store while looking for the perfect cheese roll.

# 7. Requested Business Model

- Having a registered account and being logged in is a requirement for online purchases on the website.

- Users need to be logged in to access their personal page, data, ongoing orders, past orders, etc.

- Recommended aspect ratio to fully experience the website's design is 16:9, but it supports other screen sizes as well due to it being responsive.

- The customers must have a stable internet connection in order to connect to the website and use it without any major disruptions.

- Connection to the database has to be set and fully functional.

- Website admins can modify the list of items available in the webshop (add new items, delete items, modify items, etc).

- Website admins can set discounts to the available items for a limited time.

# 8. Request List

Module | Request | Request description
------------- | ------------- | -------------
Database  | Database | Database, tables and relations
Authorization  | Register | Users can create a new account
Authorization  | Log-in | Users can log-in to their account
Authorization  | Log-out | Users can log-out of their account
Authorization  | Password change | Users can change their password
Authorization  | Add items | Admins can add new items
Authorization  | Delete items | Admins can delete items
Authorization  | Modify items | Admins can modify items
Authorization  | Set discounts | Admins can set discounts on certain items
Pages | Profile | Registered and logged in users can view their profiles
Pages | Edit profile | Registered and logged in users can edit their profiles
Pages | Landing page | Users are automatically redirected to the landing page
Pages | Categories | Users can choose a category for filtering shown items
Pages | Product page | Users can each item individually for more details
Pages | Shopping cart | Contains the items the customer has put in the cart
Pages | Orders | Users can see ther current or past orders
