@NewsletterBundle
Feature: Newsletter Content Type
When I login to a Web Express website
As an authenticated user
I should be able to create, edit, and delete Newsletters

# 1) CREATE NEWSLETTER TAXONOMY 
# 2) CREATE SUPPORTING ARTICLES FOR NEWSLETTER
# 3) A SIMPLE NEWSLETTER CAN BE CREATED
# 4) THE NEWSLETTER CAN BE REVISED 

# 1) CREATE NEWSLETTER TAXONOMY
Scenario: A simple Newsletter Taxonomy can be created
Given I am logged in as a user with the "site_owner" role
And I am on "admin/structure/taxonomy/newsletter/add"
And I fill in "Name" with "Digital Arts Magazine"
And I fill in "Newsletter Path" with " digitalarts"
And I press "Save"
Then I should see " Created new term Digital Arts Magazine"

# 2) CREATE SUPPORTING ARTICLES FOR NEWSLETTER
Scenario: Create two articles for use in Newsletter 
Given I am logged in as a user with the "site_owner" role
And I go to "node/add/article"
And I fill in "Title" with "Newsletter Article One"
And I fill in "Body" with "Digital Arts Article One"
And I press "Save"
Then I should see " Article Newsletter Article One has been created"
Then I go to "node/add/article"
And I fill in "Title" with "Newsletter Article Two"
And I fill in "Body" with "Digital Arts Article Two"
And I press "Save"
Then I should see " Article Newsletter Article Two has been created"

# 3) A SIMPLE NEWSLETTER CAN BE CREATED
Scenario: Node Functionality - A very simple Newsletter node can be created 
Given I am logged in as a user with the "site_owner" role
And I go to "node/add/newsletter "
And I fill in "edit-title" with "Sample Newsletter"
And I select "Digital Arts Magazine" from "edit-field-newsletter-type-und"
And I fill in "Body" with "This is the introductory section of the newsletter."
When I press "edit-submit"
Then I should see "Newsletter Digital Arts Magazine - Sample Newsletter has been created."
And I press "edit-publish"
Then I should be on "/newsletter/digitalarts/sample-newsletter"
And I should see "Digital Arts Magazine - Sample Newsletter and all attached articles are now published"

# 4) THE NEWSLETTER CAN BE REVISED 
Scenario: Node functionality - Create Revision of Newsletter
Given I am logged in as a user with the "site_owner" role
And I am on "newsletter/digitalarts/sample-newsletter"
And I fill in "edit-field-newsletter-section-und-0-field-newsletter-section-title-und-0-value" with "Important Articles"
And I fill in "edit-field-newsletter-section-und-0-field-newsletter-section-content-und-0-field-newsletter-articles-und-0-target-id" with "Newsletter Article One"
And I press "Add another item"
And I fill in "edit-field-newsletter-section-und-0-field-newsletter-section-content-und-1-field-newsletter-articles-und-0-target-id" with "Newsletter Article Two"
And I press "edit-submit"
And I press "edit-publish"
Then I should see "Digital Arts Magazine - Sample Newsletter and all attached articles are now published"

