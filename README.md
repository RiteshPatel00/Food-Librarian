
# Review-Website

  

### Group Submission Form

  

Group name: Food Librarian

  

Name 1: Ritesh Patel

Student Number 1: 400184627

Mac Email 1: pater16@mcmaster.ca

  

Name 2: Sunny Bhatt

Student Number 2: 400190373

Mac Email: 2. bhatts39@mcmaster.ca

  

URL: https://foodlibrarian.sunnybhatt.me/

  

Github URL: https://github.com/RiteshPatel00/Food-Librarian

  

## Added restaurants

Added in restaurants, restaurants that were added in are as follows:

- Twice The Deal Pizza   
- Bombay Grill Restaurant   
- The Burnt Tongue   
- Alfredo's Place
- Mucho Burrito     
- Joe's Pizza
  

## Specifics about Bootstrap

We used the Bootstrap framework through-out this project and as such there
is one thing to realize in the classes for a couple of the Bootstrap components. Bootstrap includes a wide range of shorthand css styles for their elements such as `mb` which equivalates to the bottom margin and `bg` which is the background. An example would be the following:

```html

<div  class="card mb-4 bg-light">

```

We do this within the class since we use multiple card elements and changing the styling of this through an external css source would mean giving each card it's own name and this method of changing the Bootstrap component directly is much easier.

## Unrated restaurants

Note that when user submits a restaurant, the intial rating is zero until users add reviews to the specific restaurant
To view unrated restaurants, clicking the  `View All Restaurants` button from the search bar will show all the restaurants including the unrated ones 

## Protection

For SQL injection prevention, all of our database queries were done using PDO parameterized queries when connecting to the database in our `connect.php` file

