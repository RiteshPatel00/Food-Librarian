
# Review-Website

  

### Group Submission Form

  

Group name: Food Librarian

  

Name 1: Ritesh Patel

Student Number 1: 400184627

Mac Email 1: pater16@mcmaster.ca

  

Name 2: Sunny Bhatt

Student Number 2: 400190373

Mac Email: 2. bhatts39@mcmaster.ca

  

URL: https://riteshpatel00.github.io/Food-Librarian/

  

Github URL: https://github.com/RiteshPatel00/Food-Librarian

  

## Add-on 1 Completed

Added in animation for 10 seperate HTML elements

We created a class for `animation` and `button-animation` which is attached to our specific HTML elements and 
styling the animation using CSS as follows:

```css
.animation {
transition: all  500ms  ease;
}

.animation:hover {
transform: scale(1.2);
}

.button-animation{
transition: all  500ms  ease;
}

.button-animation:hover {
box-shadow:inset  1000px  0  10px  rgba(0,0,0,0.4);
}
```
  

## Specifics about Bootstrap

We used the Bootstrap framework through-out this project and as such there

is one thing to realize in the classes for a couple of the Bootstrap components. Bootstrap includes a wide range of shorthand css styles for their elements such as `mb` which equivalates to the bottom margin and `bg` which is the background. An example would be the following:

```html

<div  class="card mb-4 bg-light">

```

We do this within the class since we use multiple card elements and changing the

styling of this through an external css source would mean giving each card it's own name and this method of changing the Bootstrap component directly is much easier.