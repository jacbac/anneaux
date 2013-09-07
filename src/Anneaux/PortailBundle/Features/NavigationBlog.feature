Feature: Navigation Blog
  In order to view the different blog pages
  As a visitor
  I want to browse the blog pages

Scenario: The blog pages have links to next and last blog entry
    Given I am on "/blog/test"
     Then I should see a ".pagination" element
      And I should see "Shoes" in the "#category-list" element
      And I should see "Underwear" in the "#category-list" element
