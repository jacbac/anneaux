Feature: Navigation between Blog pages
  In order to view the different blog pages
  As a visitor
  I have to browse the blog pages

Scenario: The blog pages have links to next and last blog entry
  Given I am on "/blog/1"
   Then I should see a ".pagination" element
    And I should see ".next-blog-entry" in the ".pagination" element
    And I should see ".last-blog-entry" in the ".pagination" element

Feature: Navigation with tags
  In order to view the blog pages referenced with special tags
  As a visitor
  I have to 

Scenario: The blog index pages have tag links
  Given I am on "/blog"
   Then I should see a "" element
    And I should see a "" element
    And I should see a "" element
