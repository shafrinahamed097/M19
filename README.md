* Insert Using Model:
   - The create method to "save" a new model using a single PHP statement.
   - In Laravel, the fillable property is used to define which fields in a model can be mass assigned.

* Update Using Model:
   - The update method expects an array of column and value pairs representing the columns that should be updated
   - In Laravel, the fillable property is used to define which fields in a model can be mass assigned.

*Update or Create Using Model'
   - The updateOrCreate() method in Laravel is used to update an existing record in the BD if
     it exists, or create a new record if it doesn't exist.

* Delete Using Model
   - The delete() method is Laravel's Eloquent ORM is used delete a record from the DB.

* Increment & Decrement:
   - Laravel provides convenient methods for incrementing or decrementing the value of a given column.

* Retrieving: 
   - Use the get() method to execute
   - Use the all() method to execute

* Aggregates
   - Methods for retrieving aggregate values like count, max, min, avg, and sum.
   - Call any of these methods after constructing query.

* Select Clause
   - The select() method allows you to specify the columns
   - To return distinct results use the distinct() method

* Basic Where Clauses
   - The where() method allows you to filter the results.

* Paginate
   - Display simple "Next" and "Previous" links in your application's UI, use the 
   simplePaginate method to perform a single, efficient query.

   - The paginate method counts the total number of records matched by the query 
   before retrieving the records from the database.