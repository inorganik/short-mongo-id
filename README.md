Short Mongo Id
==============
Generate short id's from MongoDB Object ID's for use in url's or other applications.

Id's are generated from the timestamp and counter of the MongoDB Id, with some slight variation. They should be reasonably unique.

This is, unfortunately, a one-way function. It will reliably produce the same short id for the same MongoDB Id, but the operation can't be reversed (it is missing information about the machine id, process id, and most of the counter).

Install (Node)
-------

Use NPM:

```bash
$ npm install short-mongo-id
```

or Git:

```bash
$ git clone git://git@github.com/treygriffith/short-mongo-id.git
```

Use
---

##### Node:

Pass a MongoDB ObjectId (or a string that can be converted to one) and it will return a reasonably unique short id made of `[-_a-zA-Z0-9]`.

```javascript
var shortId = require('short-mongo-id');
var id = shortId("507f191e810c19729de860ea"); // returns "iTxuMF"
```

##### PHP:

```php
include 'ShortMongoId.php';

$id = new MongoId("507f191e810c19729de860ea");
$shortId = ShortMongoId::ObjectIdToShortId($id); // returns "nfoMSX"

// or 

$id = new MongoId();
$shortId = ShortMongoId::ObjectIdToShortId($id); // 6-digit short ID
```

License
-------
MIT (see [License](LICENSE))