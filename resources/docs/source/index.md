---
title: API Reference

language_tabs:
- bash
- javascript

includes:

search: true

toc_footers:
- <a href='http://github.com/mpociot/documentarian'>Documentation Powered by Documentarian</a>
---
<!-- START_INFO -->
# Info

Welcome to the generated API reference.
[Get Postman Collection](http://api.oksgroup.uz/docs/collection.json)

<!-- END_INFO -->

#Activity


<!-- START_8f68192dc1dfe612cbce2edafe578e85 -->
## Activity Get all

> Example request:

```bash
curl -X GET \
    -G "http://api.oksgroup.uz/api/v1/admin/activty" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://api.oksgroup.uz/api/v1/admin/activty"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "created_at": "datetime",
    "deleted_at": "datetime",
    "description": "string",
    "file_id": "integer",
    "id": "bigint",
    "lang": "integer",
    "lang_hash": "string",
    "link": "string",
    "sort": "integer",
    "status": "integer",
    "title": "string",
    "type": "integer",
    "updated_at": "datetime",
    "roles": [
        "admin"
    ]
}
```

### HTTP Request
`GET api/v1/admin/activty`


<!-- END_8f68192dc1dfe612cbce2edafe578e85 -->

<!-- START_0ee04928fef9034b0b8530d316544495 -->
## Activity create

> Example request:

```bash
curl -X POST \
    "http://api.oksgroup.uz/api/v1/admin/activty" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"created_at":"facilis","deleted_at":"velit","description":"dolorum","file_id":20,"id":"ex","lang":13,"lang_hash":"voluptatibus","link":"voluptas","sort":1,"status":15,"title":"nemo","type":14,"updated_at":"molestiae"}'

```

```javascript
const url = new URL(
    "http://api.oksgroup.uz/api/v1/admin/activty"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "created_at": "facilis",
    "deleted_at": "velit",
    "description": "dolorum",
    "file_id": 20,
    "id": "ex",
    "lang": 13,
    "lang_hash": "voluptatibus",
    "link": "voluptas",
    "sort": 1,
    "status": 15,
    "title": "nemo",
    "type": 14,
    "updated_at": "molestiae"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/v1/admin/activty`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `created_at` | datetime |  optional  | no-required created_at
        `deleted_at` | datetime |  optional  | no-required deleted_at
        `description` | string |  optional  | no-required description
        `file_id` | integer |  optional  | no-required file_id
        `id` | bigint |  optional  | no-required id
        `lang` | integer |  optional  | no-required lang
        `lang_hash` | string |  optional  | no-required lang_hash
        `link` | string |  optional  | no-required link
        `sort` | integer |  optional  | no-required sort
        `status` | integer |  optional  | no-required status
        `title` | string |  optional  | no-required title
        `type` | integer |  optional  | no-required type
        `updated_at` | datetime |  optional  | no-required updated_at
    
<!-- END_0ee04928fef9034b0b8530d316544495 -->

<!-- START_b4b8c958fbd813c161cc336f2020876c -->
## Activity update

> Example request:

```bash
curl -X PUT \
    "http://api.oksgroup.uz/api/v1/admin/activty/1?id=assumenda" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"created_at":"eum","deleted_at":"rerum","description":"nobis","file_id":2,"id":"sunt","lang":10,"lang_hash":"incidunt","link":"facilis","sort":8,"status":20,"title":"perferendis","type":6,"updated_at":"excepturi"}'

```

```javascript
const url = new URL(
    "http://api.oksgroup.uz/api/v1/admin/activty/1"
);

let params = {
    "id": "assumenda",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "created_at": "eum",
    "deleted_at": "rerum",
    "description": "nobis",
    "file_id": 2,
    "id": "sunt",
    "lang": 10,
    "lang_hash": "incidunt",
    "link": "facilis",
    "sort": 8,
    "status": 20,
    "title": "perferendis",
    "type": 6,
    "updated_at": "excepturi"
}

fetch(url, {
    method: "PUT",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/v1/admin/activty/{id}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `id` |  required  | ID
#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `created_at` | datetime |  optional  | no-required created_at
        `deleted_at` | datetime |  optional  | no-required deleted_at
        `description` | string |  optional  | no-required description
        `file_id` | integer |  optional  | no-required file_id
        `id` | bigint |  optional  | no-required id
        `lang` | integer |  optional  | no-required lang
        `lang_hash` | string |  optional  | no-required lang_hash
        `link` | string |  optional  | no-required link
        `sort` | integer |  optional  | no-required sort
        `status` | integer |  optional  | no-required status
        `title` | string |  optional  | no-required title
        `type` | integer |  optional  | no-required type
        `updated_at` | datetime |  optional  | no-required updated_at
    
<!-- END_b4b8c958fbd813c161cc336f2020876c -->

<!-- START_68300f03b01fa71c7f5ba70c3e79867c -->
## Activity view

> Example request:

```bash
curl -X GET \
    -G "http://api.oksgroup.uz/api/v1/admin/activty/1?id=aut" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://api.oksgroup.uz/api/v1/admin/activty/1"
);

let params = {
    "id": "aut",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "created_at": "datetime",
    "deleted_at": "datetime",
    "description": "string",
    "file_id": "integer",
    "id": "bigint",
    "lang": "integer",
    "lang_hash": "string",
    "link": "string",
    "sort": "integer",
    "status": "integer",
    "title": "string",
    "type": "integer",
    "updated_at": "datetime",
    "roles": [
        "all"
    ]
}
```

### HTTP Request
`GET api/v1/admin/activty/{id}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `id` |  required  | ID

<!-- END_68300f03b01fa71c7f5ba70c3e79867c -->

<!-- START_5e2d0670be3d117c5beaf50d369dbbe1 -->
## Activity delete

> Example request:

```bash
curl -X DELETE \
    "http://api.oksgroup.uz/api/v1/admin/activty/1?id=vel" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://api.oksgroup.uz/api/v1/admin/activty/1"
);

let params = {
    "id": "vel",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/v1/admin/activty/{id}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `id` |  required  | ID

<!-- END_5e2d0670be3d117c5beaf50d369dbbe1 -->

<!-- START_5287d15d35d19bf2078e1553cdd5c439 -->
## Activity Get all

> Example request:

```bash
curl -X GET \
    -G "http://api.oksgroup.uz/api/v1/activty" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://api.oksgroup.uz/api/v1/activty"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "created_at": "datetime",
    "deleted_at": "datetime",
    "description": "string",
    "file_id": "integer",
    "id": "bigint",
    "lang": "integer",
    "lang_hash": "string",
    "link": "string",
    "sort": "integer",
    "status": "integer",
    "title": "string",
    "type": "integer",
    "updated_at": "datetime",
    "roles": [
        "admin"
    ]
}
```

### HTTP Request
`GET api/v1/activty`


<!-- END_5287d15d35d19bf2078e1553cdd5c439 -->

<!-- START_f83e87a5a02f4539dd888438a567cd16 -->
## Activity view

> Example request:

```bash
curl -X GET \
    -G "http://api.oksgroup.uz/api/v1/activty/1?id=esse" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://api.oksgroup.uz/api/v1/activty/1"
);

let params = {
    "id": "esse",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "created_at": "datetime",
    "deleted_at": "datetime",
    "description": "string",
    "file_id": "integer",
    "id": "bigint",
    "lang": "integer",
    "lang_hash": "string",
    "link": "string",
    "sort": "integer",
    "status": "integer",
    "title": "string",
    "type": "integer",
    "updated_at": "datetime",
    "roles": [
        "all"
    ]
}
```

### HTTP Request
`GET api/v1/activty/{id}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `id` |  required  | ID

<!-- END_f83e87a5a02f4539dd888438a567cd16 -->

#Banner


<!-- START_bf8d787c09dd822a14140019dccb1a01 -->
## Banner Get all

> Example request:

```bash
curl -X GET \
    -G "http://api.oksgroup.uz/api/v1/admin/banners" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://api.oksgroup.uz/api/v1/admin/banners"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "id": "bigint",
    "title": "string",
    "description": "string",
    "link": "string",
    "type": "integer",
    "sort": "integer",
    "file_id": "integer",
    "lang": "integer",
    "lang_hash": "string",
    "status": "integer",
    "created_at": "datetime",
    "updated_at": "datetime",
    "roles": [
        "admin"
    ]
}
```

### HTTP Request
`GET api/v1/admin/banners`


<!-- END_bf8d787c09dd822a14140019dccb1a01 -->

<!-- START_4898d09e9b350d22510d9216338fec39 -->
## Banner create

> Example request:

```bash
curl -X POST \
    "http://api.oksgroup.uz/api/v1/admin/banners" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"id":"et","title":"adipisci","description":"dolorem","link":"provident","type":5,"sort":11,"file_id":14,"lang":15,"lang_hash":"et","status":4,"created_at":"et","updated_at":"quos"}'

```

```javascript
const url = new URL(
    "http://api.oksgroup.uz/api/v1/admin/banners"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "id": "et",
    "title": "adipisci",
    "description": "dolorem",
    "link": "provident",
    "type": 5,
    "sort": 11,
    "file_id": 14,
    "lang": 15,
    "lang_hash": "et",
    "status": 4,
    "created_at": "et",
    "updated_at": "quos"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/v1/admin/banners`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `id` | bigint |  optional  | no-required id
        `title` | string |  optional  | no-required title
        `description` | string |  optional  | no-required description
        `link` | string |  optional  | no-required link
        `type` | integer |  optional  | no-required type
        `sort` | integer |  optional  | no-required sort
        `file_id` | integer |  optional  | no-required file_id
        `lang` | integer |  optional  | no-required lang
        `lang_hash` | string |  optional  | no-required lang_hash
        `status` | integer |  optional  | no-required status
        `created_at` | datetime |  optional  | no-required created_at
        `updated_at` | datetime |  optional  | no-required updated_at
    
<!-- END_4898d09e9b350d22510d9216338fec39 -->

<!-- START_f999ebc2783a8ac383571df8812c7dbc -->
## Banner update

> Example request:

```bash
curl -X PUT \
    "http://api.oksgroup.uz/api/v1/admin/banners/1?id=atque" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"id":"et","title":"architecto","description":"non","link":"omnis","type":17,"sort":6,"file_id":2,"lang":5,"lang_hash":"autem","status":8,"created_at":"occaecati","updated_at":"qui"}'

```

```javascript
const url = new URL(
    "http://api.oksgroup.uz/api/v1/admin/banners/1"
);

let params = {
    "id": "atque",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "id": "et",
    "title": "architecto",
    "description": "non",
    "link": "omnis",
    "type": 17,
    "sort": 6,
    "file_id": 2,
    "lang": 5,
    "lang_hash": "autem",
    "status": 8,
    "created_at": "occaecati",
    "updated_at": "qui"
}

fetch(url, {
    method: "PUT",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/v1/admin/banners/{id}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `id` |  required  | ID
#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `id` | bigint |  optional  | no-required id
        `title` | string |  optional  | no-required title
        `description` | string |  optional  | no-required description
        `link` | string |  optional  | no-required link
        `type` | integer |  optional  | no-required type
        `sort` | integer |  optional  | no-required sort
        `file_id` | integer |  optional  | no-required file_id
        `lang` | integer |  optional  | no-required lang
        `lang_hash` | string |  optional  | no-required lang_hash
        `status` | integer |  optional  | no-required status
        `created_at` | datetime |  optional  | no-required created_at
        `updated_at` | datetime |  optional  | no-required updated_at
    
<!-- END_f999ebc2783a8ac383571df8812c7dbc -->

<!-- START_e4c4a612684861d9b7cab6336bafa46a -->
## Banner view

> Example request:

```bash
curl -X GET \
    -G "http://api.oksgroup.uz/api/v1/admin/banners/1?id=tempora" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://api.oksgroup.uz/api/v1/admin/banners/1"
);

let params = {
    "id": "tempora",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "id": "bigint",
    "title": "string",
    "description": "string",
    "link": "string",
    "type": "integer",
    "sort": "integer",
    "file_id": "integer",
    "lang": "integer",
    "lang_hash": "string",
    "status": "integer",
    "created_at": "datetime",
    "updated_at": "datetime",
    "roles": [
        "all"
    ]
}
```

### HTTP Request
`GET api/v1/admin/banners/{id}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `id` |  required  | ID

<!-- END_e4c4a612684861d9b7cab6336bafa46a -->

<!-- START_c5066517cfc7e5df25f30e182d70b5fa -->
## Banner delete

> Example request:

```bash
curl -X DELETE \
    "http://api.oksgroup.uz/api/v1/admin/banners/1?id=esse" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://api.oksgroup.uz/api/v1/admin/banners/1"
);

let params = {
    "id": "esse",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/v1/admin/banners/{id}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `id` |  required  | ID

<!-- END_c5066517cfc7e5df25f30e182d70b5fa -->

<!-- START_ed5da9594c924002ba1dc771427a4614 -->
## Banner Get all

> Example request:

```bash
curl -X GET \
    -G "http://api.oksgroup.uz/api/v1/banners" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://api.oksgroup.uz/api/v1/banners"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "id": "bigint",
    "title": "string",
    "description": "string",
    "link": "string",
    "type": "integer",
    "sort": "integer",
    "file_id": "integer",
    "lang": "integer",
    "lang_hash": "string",
    "status": "integer",
    "created_at": "datetime",
    "updated_at": "datetime",
    "roles": [
        "admin"
    ]
}
```

### HTTP Request
`GET api/v1/banners`


<!-- END_ed5da9594c924002ba1dc771427a4614 -->

<!-- START_4d938392e5baf8bbde3854b9642c3db0 -->
## Banner view

> Example request:

```bash
curl -X GET \
    -G "http://api.oksgroup.uz/api/v1/banners/1?id=molestiae" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://api.oksgroup.uz/api/v1/banners/1"
);

let params = {
    "id": "molestiae",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "id": "bigint",
    "title": "string",
    "description": "string",
    "link": "string",
    "type": "integer",
    "sort": "integer",
    "file_id": "integer",
    "lang": "integer",
    "lang_hash": "string",
    "status": "integer",
    "created_at": "datetime",
    "updated_at": "datetime",
    "roles": [
        "all"
    ]
}
```

### HTTP Request
`GET api/v1/banners/{id}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `id` |  required  | ID

<!-- END_4d938392e5baf8bbde3854b9642c3db0 -->

#Feedback


<!-- START_3887bd049862c5d19381750fbbca11a8 -->
## Feedback Get all

> Example request:

```bash
curl -X GET \
    -G "http://api.oksgroup.uz/api/v1/admin/feedback" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://api.oksgroup.uz/api/v1/admin/feedback"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "id": "bigint",
    "name": "string",
    "phone": "string",
    "message": "text",
    "services": "text",
    "email": "string",
    "files": "string",
    "type": "integer",
    "address": "string",
    "status": "integer",
    "drink": "integer",
    "deleted_at": "datetime",
    "created_at": "datetime",
    "updated_at": "datetime",
    "roles": [
        "admin"
    ]
}
```

### HTTP Request
`GET api/v1/admin/feedback`


<!-- END_3887bd049862c5d19381750fbbca11a8 -->

<!-- START_36688fecafb90eabc00f6d05c49debcb -->
## Feedback create

> Example request:

```bash
curl -X POST \
    "http://api.oksgroup.uz/api/v1/admin/feedback" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"id":"repellendus","name":"temporibus","phone":"in","message":"mollitia","services":"pariatur","email":"eum","files":"explicabo","type":15,"address":"quia","status":16,"drink":15,"deleted_at":"eveniet","created_at":"velit","updated_at":"amet"}'

```

```javascript
const url = new URL(
    "http://api.oksgroup.uz/api/v1/admin/feedback"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "id": "repellendus",
    "name": "temporibus",
    "phone": "in",
    "message": "mollitia",
    "services": "pariatur",
    "email": "eum",
    "files": "explicabo",
    "type": 15,
    "address": "quia",
    "status": 16,
    "drink": 15,
    "deleted_at": "eveniet",
    "created_at": "velit",
    "updated_at": "amet"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/v1/admin/feedback`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `id` | bigint |  optional  | no-required id
        `name` | string |  optional  | no-required name
        `phone` | string |  optional  | no-required phone
        `message` | text |  optional  | no-required message
        `services` | text |  optional  | no-required services
        `email` | string |  optional  | no-required email
        `files` | string |  optional  | no-required files
        `type` | integer |  optional  | no-required type
        `address` | string |  optional  | no-required address
        `status` | integer |  optional  | no-required status
        `drink` | integer |  optional  | no-required drink
        `deleted_at` | datetime |  optional  | no-required deleted_at
        `created_at` | datetime |  optional  | no-required created_at
        `updated_at` | datetime |  optional  | no-required updated_at
    
<!-- END_36688fecafb90eabc00f6d05c49debcb -->

<!-- START_37a6123b379c31e01c14d591d2e99ede -->
## Feedback update

> Example request:

```bash
curl -X PUT \
    "http://api.oksgroup.uz/api/v1/admin/feedback/1?id=delectus" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"id":"iusto","name":"non","phone":"illum","message":"voluptas","services":"adipisci","email":"sit","files":"deserunt","type":8,"address":"ipsum","status":16,"drink":10,"deleted_at":"mollitia","created_at":"odit","updated_at":"quisquam"}'

```

```javascript
const url = new URL(
    "http://api.oksgroup.uz/api/v1/admin/feedback/1"
);

let params = {
    "id": "delectus",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "id": "iusto",
    "name": "non",
    "phone": "illum",
    "message": "voluptas",
    "services": "adipisci",
    "email": "sit",
    "files": "deserunt",
    "type": 8,
    "address": "ipsum",
    "status": 16,
    "drink": 10,
    "deleted_at": "mollitia",
    "created_at": "odit",
    "updated_at": "quisquam"
}

fetch(url, {
    method: "PUT",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/v1/admin/feedback/{id}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `id` |  required  | ID
#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `id` | bigint |  optional  | no-required id
        `name` | string |  optional  | no-required name
        `phone` | string |  optional  | no-required phone
        `message` | text |  optional  | no-required message
        `services` | text |  optional  | no-required services
        `email` | string |  optional  | no-required email
        `files` | string |  optional  | no-required files
        `type` | integer |  optional  | no-required type
        `address` | string |  optional  | no-required address
        `status` | integer |  optional  | no-required status
        `drink` | integer |  optional  | no-required drink
        `deleted_at` | datetime |  optional  | no-required deleted_at
        `created_at` | datetime |  optional  | no-required created_at
        `updated_at` | datetime |  optional  | no-required updated_at
    
<!-- END_37a6123b379c31e01c14d591d2e99ede -->

<!-- START_fcf5b7dd1746b6a0aa52cf997c201d53 -->
## Feedback view

> Example request:

```bash
curl -X GET \
    -G "http://api.oksgroup.uz/api/v1/admin/feedback/1?id=dolor" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://api.oksgroup.uz/api/v1/admin/feedback/1"
);

let params = {
    "id": "dolor",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "id": "bigint",
    "name": "string",
    "phone": "string",
    "message": "text",
    "services": "text",
    "email": "string",
    "files": "string",
    "type": "integer",
    "address": "string",
    "status": "integer",
    "drink": "integer",
    "deleted_at": "datetime",
    "created_at": "datetime",
    "updated_at": "datetime",
    "roles": [
        "all"
    ]
}
```

### HTTP Request
`GET api/v1/admin/feedback/{id}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `id` |  required  | ID

<!-- END_fcf5b7dd1746b6a0aa52cf997c201d53 -->

<!-- START_9d4bfc738229de6a4120ec8a501a543c -->
## Feedback delete

> Example request:

```bash
curl -X DELETE \
    "http://api.oksgroup.uz/api/v1/admin/feedback/1?id=aut" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://api.oksgroup.uz/api/v1/admin/feedback/1"
);

let params = {
    "id": "aut",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/v1/admin/feedback/{id}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `id` |  required  | ID

<!-- END_9d4bfc738229de6a4120ec8a501a543c -->

<!-- START_b6122cc9a0e0052c2205dbd7c1c86c24 -->
## Feedback Get all

> Example request:

```bash
curl -X GET \
    -G "http://api.oksgroup.uz/api/v1/feedback" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://api.oksgroup.uz/api/v1/feedback"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "id": "bigint",
    "name": "string",
    "phone": "string",
    "message": "text",
    "services": "text",
    "email": "string",
    "files": "string",
    "type": "integer",
    "address": "string",
    "status": "integer",
    "drink": "integer",
    "deleted_at": "datetime",
    "created_at": "datetime",
    "updated_at": "datetime",
    "roles": [
        "admin"
    ]
}
```

### HTTP Request
`GET api/v1/feedback`


<!-- END_b6122cc9a0e0052c2205dbd7c1c86c24 -->

<!-- START_92d6887f025b637134ef487e9ea063c7 -->
## Feedback update

> Example request:

```bash
curl -X PUT \
    "http://api.oksgroup.uz/api/v1/feedback/1?id=ipsa" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"id":"id","name":"occaecati","phone":"animi","message":"odit","services":"est","email":"quia","files":"nisi","type":19,"address":"eligendi","status":12,"drink":5,"deleted_at":"dolorem","created_at":"quis","updated_at":"rerum"}'

```

```javascript
const url = new URL(
    "http://api.oksgroup.uz/api/v1/feedback/1"
);

let params = {
    "id": "ipsa",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "id": "id",
    "name": "occaecati",
    "phone": "animi",
    "message": "odit",
    "services": "est",
    "email": "quia",
    "files": "nisi",
    "type": 19,
    "address": "eligendi",
    "status": 12,
    "drink": 5,
    "deleted_at": "dolorem",
    "created_at": "quis",
    "updated_at": "rerum"
}

fetch(url, {
    method: "PUT",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/v1/feedback/{id}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `id` |  required  | ID
#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `id` | bigint |  optional  | no-required id
        `name` | string |  optional  | no-required name
        `phone` | string |  optional  | no-required phone
        `message` | text |  optional  | no-required message
        `services` | text |  optional  | no-required services
        `email` | string |  optional  | no-required email
        `files` | string |  optional  | no-required files
        `type` | integer |  optional  | no-required type
        `address` | string |  optional  | no-required address
        `status` | integer |  optional  | no-required status
        `drink` | integer |  optional  | no-required drink
        `deleted_at` | datetime |  optional  | no-required deleted_at
        `created_at` | datetime |  optional  | no-required created_at
        `updated_at` | datetime |  optional  | no-required updated_at
    
<!-- END_92d6887f025b637134ef487e9ea063c7 -->

<!-- START_001b8019cbeae696d9d99674c5b0f65f -->
## Feedback view

> Example request:

```bash
curl -X GET \
    -G "http://api.oksgroup.uz/api/v1/feedback/1?id=consequatur" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://api.oksgroup.uz/api/v1/feedback/1"
);

let params = {
    "id": "consequatur",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "id": "bigint",
    "name": "string",
    "phone": "string",
    "message": "text",
    "services": "text",
    "email": "string",
    "files": "string",
    "type": "integer",
    "address": "string",
    "status": "integer",
    "drink": "integer",
    "deleted_at": "datetime",
    "created_at": "datetime",
    "updated_at": "datetime",
    "roles": [
        "all"
    ]
}
```

### HTTP Request
`GET api/v1/feedback/{id}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `id` |  required  | ID

<!-- END_001b8019cbeae696d9d99674c5b0f65f -->

<!-- START_5ea6ab61bf6bf721148887c0ced29d88 -->
## Feedback create

> Example request:

```bash
curl -X POST \
    "http://api.oksgroup.uz/api/v1/feedback" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"id":"omnis","name":"fugit","phone":"amet","message":"vel","services":"vero","email":"pariatur","files":"quia","type":8,"address":"magnam","status":9,"drink":1,"deleted_at":"magni","created_at":"officiis","updated_at":"doloremque"}'

```

```javascript
const url = new URL(
    "http://api.oksgroup.uz/api/v1/feedback"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "id": "omnis",
    "name": "fugit",
    "phone": "amet",
    "message": "vel",
    "services": "vero",
    "email": "pariatur",
    "files": "quia",
    "type": 8,
    "address": "magnam",
    "status": 9,
    "drink": 1,
    "deleted_at": "magni",
    "created_at": "officiis",
    "updated_at": "doloremque"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/v1/feedback`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `id` | bigint |  optional  | no-required id
        `name` | string |  optional  | no-required name
        `phone` | string |  optional  | no-required phone
        `message` | text |  optional  | no-required message
        `services` | text |  optional  | no-required services
        `email` | string |  optional  | no-required email
        `files` | string |  optional  | no-required files
        `type` | integer |  optional  | no-required type
        `address` | string |  optional  | no-required address
        `status` | integer |  optional  | no-required status
        `drink` | integer |  optional  | no-required drink
        `deleted_at` | datetime |  optional  | no-required deleted_at
        `created_at` | datetime |  optional  | no-required created_at
        `updated_at` | datetime |  optional  | no-required updated_at
    
<!-- END_5ea6ab61bf6bf721148887c0ced29d88 -->

#Filemanager - Filemanager


<!-- START_fe9c328882475a3086bb6c33c57454f7 -->
## api/v1/admin/filemanager
> Example request:

```bash
curl -X GET \
    -G "http://api.oksgroup.uz/api/v1/admin/filemanager" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://api.oksgroup.uz/api/v1/admin/filemanager"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/v1/admin/filemanager`


<!-- END_fe9c328882475a3086bb6c33c57454f7 -->

<!-- START_715d54bdc0dab344c8056f8da3938f11 -->
## api/v1/admin/filemanager/{id}
> Example request:

```bash
curl -X GET \
    -G "http://api.oksgroup.uz/api/v1/admin/filemanager/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://api.oksgroup.uz/api/v1/admin/filemanager/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/v1/admin/filemanager/{id}`


<!-- END_715d54bdc0dab344c8056f8da3938f11 -->

<!-- START_20411a9c51efc6beb9d2b0cfdaa697c2 -->
## api/v1/admin/filemanager/{id}
> Example request:

```bash
curl -X PUT \
    "http://api.oksgroup.uz/api/v1/admin/filemanager/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://api.oksgroup.uz/api/v1/admin/filemanager/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/v1/admin/filemanager/{id}`


<!-- END_20411a9c51efc6beb9d2b0cfdaa697c2 -->

<!-- START_3e3d942d2f7e2f296e2564917548fbbc -->
## api/v1/admin/filemanager/{id}
> Example request:

```bash
curl -X DELETE \
    "http://api.oksgroup.uz/api/v1/admin/filemanager/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://api.oksgroup.uz/api/v1/admin/filemanager/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/v1/admin/filemanager/{id}`


<!-- END_3e3d942d2f7e2f296e2564917548fbbc -->

<!-- START_be79ac07fead71b2a35911c7b8325bbd -->
## Filemanager Uploads

> Example request:

```bash
curl -X POST \
    "http://api.oksgroup.uz/api/v1/admin/filemanager/uploads" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"files":"porro"}'

```

```javascript
const url = new URL(
    "http://api.oksgroup.uz/api/v1/admin/filemanager/uploads"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "files": "porro"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/v1/admin/filemanager/uploads`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `files` | file |  required  | File
    
<!-- END_be79ac07fead71b2a35911c7b8325bbd -->

<!-- START_039192d31a4210f8bedbd5011660a7e9 -->
## api/v1/filemanager/{id}
> Example request:

```bash
curl -X DELETE \
    "http://api.oksgroup.uz/api/v1/filemanager/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://api.oksgroup.uz/api/v1/filemanager/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/v1/filemanager/{id}`


<!-- END_039192d31a4210f8bedbd5011660a7e9 -->

<!-- START_eb32ba3df74de7e9d5558332f555eb7d -->
## Filemanager Uploads

> Example request:

```bash
curl -X POST \
    "http://api.oksgroup.uz/api/v1/filemanager/uploads" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"files":"animi"}'

```

```javascript
const url = new URL(
    "http://api.oksgroup.uz/api/v1/filemanager/uploads"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "files": "animi"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/v1/filemanager/uploads`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `files` | file |  required  | File
    
<!-- END_eb32ba3df74de7e9d5558332f555eb7d -->

<!-- START_6d588e956c82c24658dfea7f408a9c90 -->
## filemanager
> Example request:

```bash
curl -X GET \
    -G "http://api.oksgroup.uz/filemanager" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://api.oksgroup.uz/filemanager"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "current_page": 1,
    "data": [],
    "first_page_url": "http:\/\/localhost\/filemanager?page=1",
    "from": null,
    "last_page": 1,
    "last_page_url": "http:\/\/localhost\/filemanager?page=1",
    "next_page_url": null,
    "path": "http:\/\/localhost\/filemanager",
    "per_page": 15,
    "prev_page_url": null,
    "to": null,
    "total": 0
}
```

### HTTP Request
`GET filemanager`


<!-- END_6d588e956c82c24658dfea7f408a9c90 -->

#FilemanagerFolder - FilemanagerFolder


<!-- START_dcf48a99f0f5038490a39b1f6b2c5220 -->
## api/v1/admin/filemanager/folder
> Example request:

```bash
curl -X GET \
    -G "http://api.oksgroup.uz/api/v1/admin/filemanager/folder" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://api.oksgroup.uz/api/v1/admin/filemanager/folder"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/v1/admin/filemanager/folder`


<!-- END_dcf48a99f0f5038490a39b1f6b2c5220 -->

<!-- START_e3bc2403ac8c316cfa2e391d3ed9be43 -->
## api/v1/admin/filemanager/folder/{id}
> Example request:

```bash
curl -X GET \
    -G "http://api.oksgroup.uz/api/v1/admin/filemanager/folder/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://api.oksgroup.uz/api/v1/admin/filemanager/folder/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/v1/admin/filemanager/folder/{id}`


<!-- END_e3bc2403ac8c316cfa2e391d3ed9be43 -->

<!-- START_38950588f1310f4227cc08b386fd6e75 -->
## api/v1/admin/filemanager/folder
> Example request:

```bash
curl -X POST \
    "http://api.oksgroup.uz/api/v1/admin/filemanager/folder" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://api.oksgroup.uz/api/v1/admin/filemanager/folder"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/v1/admin/filemanager/folder`


<!-- END_38950588f1310f4227cc08b386fd6e75 -->

<!-- START_5b9adcd969a5b36ac0b70acd389941ea -->
## api/v1/admin/filemanager/folder/{id}
> Example request:

```bash
curl -X PUT \
    "http://api.oksgroup.uz/api/v1/admin/filemanager/folder/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://api.oksgroup.uz/api/v1/admin/filemanager/folder/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/v1/admin/filemanager/folder/{id}`


<!-- END_5b9adcd969a5b36ac0b70acd389941ea -->

<!-- START_4ad6b371a68906a389cdf2c85ecd67be -->
## api/v1/admin/filemanager/folder/{id}
> Example request:

```bash
curl -X DELETE \
    "http://api.oksgroup.uz/api/v1/admin/filemanager/folder/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://api.oksgroup.uz/api/v1/admin/filemanager/folder/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/v1/admin/filemanager/folder/{id}`


<!-- END_4ad6b371a68906a389cdf2c85ecd67be -->

#History


<!-- START_a757e1093fb8e552f12267308e156427 -->
## History Get all

> Example request:

```bash
curl -X GET \
    -G "http://api.oksgroup.uz/api/v1/admin/history" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://api.oksgroup.uz/api/v1/admin/history"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "id": "bigint",
    "title": "string",
    "description": "string",
    "url": "string",
    "file_id": "integer",
    "lang": "integer",
    "lang_hash": "string",
    "status": "integer",
    "created_at": "datetime",
    "updated_at": "datetime",
    "roles": [
        "admin"
    ]
}
```

### HTTP Request
`GET api/v1/admin/history`


<!-- END_a757e1093fb8e552f12267308e156427 -->

<!-- START_1e0c9c7289b9fb43002eba2ca10f9c34 -->
## History create

> Example request:

```bash
curl -X POST \
    "http://api.oksgroup.uz/api/v1/admin/history" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"id":"error","title":"porro","description":"sed","url":"soluta","file_id":1,"lang":1,"lang_hash":"dolor","status":11,"created_at":"adipisci","updated_at":"eos"}'

```

```javascript
const url = new URL(
    "http://api.oksgroup.uz/api/v1/admin/history"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "id": "error",
    "title": "porro",
    "description": "sed",
    "url": "soluta",
    "file_id": 1,
    "lang": 1,
    "lang_hash": "dolor",
    "status": 11,
    "created_at": "adipisci",
    "updated_at": "eos"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/v1/admin/history`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `id` | bigint |  optional  | no-required id
        `title` | string |  optional  | no-required title
        `description` | string |  optional  | no-required description
        `url` | string |  optional  | no-required url
        `file_id` | integer |  optional  | no-required file_id
        `lang` | integer |  optional  | no-required lang
        `lang_hash` | string |  optional  | no-required lang_hash
        `status` | integer |  optional  | no-required status
        `created_at` | datetime |  optional  | no-required created_at
        `updated_at` | datetime |  optional  | no-required updated_at
    
<!-- END_1e0c9c7289b9fb43002eba2ca10f9c34 -->

<!-- START_d02e758328af587930cddc15732c9769 -->
## History update

> Example request:

```bash
curl -X PUT \
    "http://api.oksgroup.uz/api/v1/admin/history/1?id=sapiente" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"id":"impedit","title":"itaque","description":"nesciunt","url":"repudiandae","file_id":18,"lang":1,"lang_hash":"a","status":15,"created_at":"enim","updated_at":"nostrum"}'

```

```javascript
const url = new URL(
    "http://api.oksgroup.uz/api/v1/admin/history/1"
);

let params = {
    "id": "sapiente",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "id": "impedit",
    "title": "itaque",
    "description": "nesciunt",
    "url": "repudiandae",
    "file_id": 18,
    "lang": 1,
    "lang_hash": "a",
    "status": 15,
    "created_at": "enim",
    "updated_at": "nostrum"
}

fetch(url, {
    method: "PUT",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/v1/admin/history/{id}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `id` |  required  | ID
#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `id` | bigint |  optional  | no-required id
        `title` | string |  optional  | no-required title
        `description` | string |  optional  | no-required description
        `url` | string |  optional  | no-required url
        `file_id` | integer |  optional  | no-required file_id
        `lang` | integer |  optional  | no-required lang
        `lang_hash` | string |  optional  | no-required lang_hash
        `status` | integer |  optional  | no-required status
        `created_at` | datetime |  optional  | no-required created_at
        `updated_at` | datetime |  optional  | no-required updated_at
    
<!-- END_d02e758328af587930cddc15732c9769 -->

<!-- START_95752e3e5dcbfe0a0c22eb4815c35073 -->
## History view

> Example request:

```bash
curl -X GET \
    -G "http://api.oksgroup.uz/api/v1/admin/history/1?id=error" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://api.oksgroup.uz/api/v1/admin/history/1"
);

let params = {
    "id": "error",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "id": "bigint",
    "title": "string",
    "description": "string",
    "url": "string",
    "file_id": "integer",
    "lang": "integer",
    "lang_hash": "string",
    "status": "integer",
    "created_at": "datetime",
    "updated_at": "datetime",
    "roles": [
        "all"
    ]
}
```

### HTTP Request
`GET api/v1/admin/history/{id}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `id` |  required  | ID

<!-- END_95752e3e5dcbfe0a0c22eb4815c35073 -->

<!-- START_fbeef2a7d1fd519f902a775495fe0a24 -->
## History delete

> Example request:

```bash
curl -X DELETE \
    "http://api.oksgroup.uz/api/v1/admin/history/1?id=saepe" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://api.oksgroup.uz/api/v1/admin/history/1"
);

let params = {
    "id": "saepe",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/v1/admin/history/{id}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `id` |  required  | ID

<!-- END_fbeef2a7d1fd519f902a775495fe0a24 -->

<!-- START_8704c8694936f5b9adf70c1e3933570c -->
## History Get all

> Example request:

```bash
curl -X GET \
    -G "http://api.oksgroup.uz/api/v1/history" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://api.oksgroup.uz/api/v1/history"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "id": "bigint",
    "title": "string",
    "description": "string",
    "url": "string",
    "file_id": "integer",
    "lang": "integer",
    "lang_hash": "string",
    "status": "integer",
    "created_at": "datetime",
    "updated_at": "datetime",
    "roles": [
        "admin"
    ]
}
```

### HTTP Request
`GET api/v1/history`


<!-- END_8704c8694936f5b9adf70c1e3933570c -->

<!-- START_487a8c2257ed640ee113caa4c3fa4ad7 -->
## History view

> Example request:

```bash
curl -X GET \
    -G "http://api.oksgroup.uz/api/v1/history/1?id=dolorem" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://api.oksgroup.uz/api/v1/history/1"
);

let params = {
    "id": "dolorem",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "id": "bigint",
    "title": "string",
    "description": "string",
    "url": "string",
    "file_id": "integer",
    "lang": "integer",
    "lang_hash": "string",
    "status": "integer",
    "created_at": "datetime",
    "updated_at": "datetime",
    "roles": [
        "all"
    ]
}
```

### HTTP Request
`GET api/v1/history/{id}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `id` |  required  | ID

<!-- END_487a8c2257ed640ee113caa4c3fa4ad7 -->

#Menu


<!-- START_120df25504813421d08c382ea1398b85 -->
## Menu Get all

> Example request:

```bash
curl -X GET \
    -G "http://api.oksgroup.uz/api/v1/admin/menus" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://api.oksgroup.uz/api/v1/admin/menus"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "id": "bigint",
    "title": "string",
    "alias": "string",
    "type": "integer",
    "lang": "integer",
    "lang_hash": "string",
    "status": "integer",
    "deleted_at": "datetime",
    "created_at": "datetime",
    "updated_at": "datetime",
    "roles": [
        "admin"
    ]
}
```

### HTTP Request
`GET api/v1/admin/menus`


<!-- END_120df25504813421d08c382ea1398b85 -->

<!-- START_0a006fd085f0f6a58e15663e46b9ff08 -->
## Menu create

> Example request:

```bash
curl -X POST \
    "http://api.oksgroup.uz/api/v1/admin/menus" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"id":"ullam","title":"blanditiis","alias":"error","type":11,"lang":15,"lang_hash":"enim","status":10,"deleted_at":"architecto","created_at":"nisi","updated_at":"repellendus"}'

```

```javascript
const url = new URL(
    "http://api.oksgroup.uz/api/v1/admin/menus"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "id": "ullam",
    "title": "blanditiis",
    "alias": "error",
    "type": 11,
    "lang": 15,
    "lang_hash": "enim",
    "status": 10,
    "deleted_at": "architecto",
    "created_at": "nisi",
    "updated_at": "repellendus"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/v1/admin/menus`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `id` | bigint |  optional  | no-required id
        `title` | string |  optional  | no-required title
        `alias` | string |  optional  | no-required alias
        `type` | integer |  optional  | no-required type
        `lang` | integer |  optional  | no-required lang
        `lang_hash` | string |  optional  | no-required lang_hash
        `status` | integer |  optional  | no-required status
        `deleted_at` | datetime |  optional  | no-required deleted_at
        `created_at` | datetime |  optional  | no-required created_at
        `updated_at` | datetime |  optional  | no-required updated_at
    
<!-- END_0a006fd085f0f6a58e15663e46b9ff08 -->

<!-- START_cdd7a8593bce108fcb08ad3f23ed38f2 -->
## Menu update

> Example request:

```bash
curl -X PUT \
    "http://api.oksgroup.uz/api/v1/admin/menus/1?id=dolorem" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"id":"consequuntur","title":"odit","alias":"beatae","type":8,"lang":17,"lang_hash":"qui","status":10,"deleted_at":"quibusdam","created_at":"ut","updated_at":"et"}'

```

```javascript
const url = new URL(
    "http://api.oksgroup.uz/api/v1/admin/menus/1"
);

let params = {
    "id": "dolorem",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "id": "consequuntur",
    "title": "odit",
    "alias": "beatae",
    "type": 8,
    "lang": 17,
    "lang_hash": "qui",
    "status": 10,
    "deleted_at": "quibusdam",
    "created_at": "ut",
    "updated_at": "et"
}

fetch(url, {
    method: "PUT",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/v1/admin/menus/{id}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `id` |  required  | ID
#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `id` | bigint |  optional  | no-required id
        `title` | string |  optional  | no-required title
        `alias` | string |  optional  | no-required alias
        `type` | integer |  optional  | no-required type
        `lang` | integer |  optional  | no-required lang
        `lang_hash` | string |  optional  | no-required lang_hash
        `status` | integer |  optional  | no-required status
        `deleted_at` | datetime |  optional  | no-required deleted_at
        `created_at` | datetime |  optional  | no-required created_at
        `updated_at` | datetime |  optional  | no-required updated_at
    
<!-- END_cdd7a8593bce108fcb08ad3f23ed38f2 -->

<!-- START_57bc6d8afd49366ecd4d89b9ec6acb45 -->
## Menu view

> Example request:

```bash
curl -X GET \
    -G "http://api.oksgroup.uz/api/v1/admin/menus/1?id=quo" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://api.oksgroup.uz/api/v1/admin/menus/1"
);

let params = {
    "id": "quo",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "id": "bigint",
    "title": "string",
    "alias": "string",
    "type": "integer",
    "lang": "integer",
    "lang_hash": "string",
    "status": "integer",
    "deleted_at": "datetime",
    "created_at": "datetime",
    "updated_at": "datetime",
    "roles": [
        "all"
    ]
}
```

### HTTP Request
`GET api/v1/admin/menus/{id}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `id` |  required  | ID

<!-- END_57bc6d8afd49366ecd4d89b9ec6acb45 -->

<!-- START_c354f50cc811d23618912b5eb39e5438 -->
## Menu delete

> Example request:

```bash
curl -X DELETE \
    "http://api.oksgroup.uz/api/v1/admin/menus/1?id=qui" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://api.oksgroup.uz/api/v1/admin/menus/1"
);

let params = {
    "id": "qui",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/v1/admin/menus/{id}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `id` |  required  | ID

<!-- END_c354f50cc811d23618912b5eb39e5438 -->

<!-- START_43cb73f9290353216bde3837225f298d -->
## Menu Get all

> Example request:

```bash
curl -X GET \
    -G "http://api.oksgroup.uz/api/v1/menus" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://api.oksgroup.uz/api/v1/menus"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "id": "bigint",
    "title": "string",
    "alias": "string",
    "type": "integer",
    "lang": "integer",
    "lang_hash": "string",
    "status": "integer",
    "deleted_at": "datetime",
    "created_at": "datetime",
    "updated_at": "datetime",
    "roles": [
        "admin"
    ]
}
```

### HTTP Request
`GET api/v1/menus`


<!-- END_43cb73f9290353216bde3837225f298d -->

<!-- START_efa91ebe4ad22b6ab24e5083e5cfad8e -->
## Menu view

> Example request:

```bash
curl -X GET \
    -G "http://api.oksgroup.uz/api/v1/menus/1?id=fugit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://api.oksgroup.uz/api/v1/menus/1"
);

let params = {
    "id": "fugit",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "id": "bigint",
    "title": "string",
    "alias": "string",
    "type": "integer",
    "lang": "integer",
    "lang_hash": "string",
    "status": "integer",
    "deleted_at": "datetime",
    "created_at": "datetime",
    "updated_at": "datetime",
    "roles": [
        "all"
    ]
}
```

### HTTP Request
`GET api/v1/menus/{id}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `id` |  required  | ID

<!-- END_efa91ebe4ad22b6ab24e5083e5cfad8e -->

<!-- START_d415c76dcd54098871ca0ae9d35da00e -->
## api/v1/menus/{slug}
> Example request:

```bash
curl -X GET \
    -G "http://api.oksgroup.uz/api/v1/menus/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://api.oksgroup.uz/api/v1/menus/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (404):

```json
{
    "message": "No query results for model [App\\Models\\Menu] 1"
}
```

### HTTP Request
`GET api/v1/menus/{slug}`


<!-- END_d415c76dcd54098871ca0ae9d35da00e -->

#MenuItems


<!-- START_495acc66ae87cc5c35d960e9184341d7 -->
## MenuItems Get all

> Example request:

```bash
curl -X GET \
    -G "http://api.oksgroup.uz/api/v1/admin/menu-items" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://api.oksgroup.uz/api/v1/admin/menu-items"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "id": "integer",
    "menu_id": "integer",
    "title": "string",
    "url": "string",
    "file_id": "integer",
    "sort": "integer",
    "menu_item_parent_id": "integer",
    "status": "integer",
    "deleted_at": "datetime",
    "created_at": "datetime",
    "updated_at": "datetime",
    "roles": [
        "admin"
    ],
    "include": [
        "file,menuItems"
    ]
}
```

### HTTP Request
`GET api/v1/admin/menu-items`


<!-- END_495acc66ae87cc5c35d960e9184341d7 -->

<!-- START_51d7b465e1778f9d17e12028158bc2cb -->
## MenuItems create

> Example request:

```bash
curl -X POST \
    "http://api.oksgroup.uz/api/v1/admin/menu-items" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://api.oksgroup.uz/api/v1/admin/menu-items"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/v1/admin/menu-items`


<!-- END_51d7b465e1778f9d17e12028158bc2cb -->

<!-- START_92d6314ed16b3f07ad929336e3412daf -->
## api/v1/admin/menu-items/sort
> Example request:

```bash
curl -X PUT \
    "http://api.oksgroup.uz/api/v1/admin/menu-items/sort" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://api.oksgroup.uz/api/v1/admin/menu-items/sort"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/v1/admin/menu-items/sort`


<!-- END_92d6314ed16b3f07ad929336e3412daf -->

<!-- START_66a8a7d35110af33e03ba2d1fe4802e7 -->
## MenuItems update

> Example request:

```bash
curl -X PUT \
    "http://api.oksgroup.uz/api/v1/admin/menu-items/1?id=sequi" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://api.oksgroup.uz/api/v1/admin/menu-items/1"
);

let params = {
    "id": "sequi",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/v1/admin/menu-items/{id}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `id` |  required  | ID

<!-- END_66a8a7d35110af33e03ba2d1fe4802e7 -->

<!-- START_a698812008eafe40128b1d65383a38b2 -->
## MenuItems view

> Example request:

```bash
curl -X GET \
    -G "http://api.oksgroup.uz/api/v1/admin/menu-items/1?id=delectus" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://api.oksgroup.uz/api/v1/admin/menu-items/1"
);

let params = {
    "id": "delectus",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "roles": [
        "all"
    ]
}
```

### HTTP Request
`GET api/v1/admin/menu-items/{id}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `id` |  required  | ID

<!-- END_a698812008eafe40128b1d65383a38b2 -->

<!-- START_1692508af914b496c3c25486cf42c370 -->
## MenuItems delete

> Example request:

```bash
curl -X DELETE \
    "http://api.oksgroup.uz/api/v1/admin/menu-items/1?id=repudiandae" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://api.oksgroup.uz/api/v1/admin/menu-items/1"
);

let params = {
    "id": "repudiandae",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/v1/admin/menu-items/{id}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `id` |  required  | ID

<!-- END_1692508af914b496c3c25486cf42c370 -->

<!-- START_05e55b5f0d22230cd05901d8dc22cd0d -->
## MenuItems Get all

> Example request:

```bash
curl -X GET \
    -G "http://api.oksgroup.uz/api/v1/menu-items" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://api.oksgroup.uz/api/v1/menu-items"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "id": "integer",
    "menu_id": "integer",
    "title": "string",
    "url": "string",
    "file_id": "integer",
    "sort": "integer",
    "menu_item_parent_id": "integer",
    "status": "integer",
    "deleted_at": "datetime",
    "created_at": "datetime",
    "updated_at": "datetime",
    "roles": [
        "admin"
    ],
    "include": [
        "file,menuItems"
    ]
}
```

### HTTP Request
`GET api/v1/menu-items`


<!-- END_05e55b5f0d22230cd05901d8dc22cd0d -->

<!-- START_35253558f1884f62a9b1d770515be85e -->
## MenuItems view

> Example request:

```bash
curl -X GET \
    -G "http://api.oksgroup.uz/api/v1/menu-items/1?id=odit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://api.oksgroup.uz/api/v1/menu-items/1"
);

let params = {
    "id": "odit",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "roles": [
        "all"
    ]
}
```

### HTTP Request
`GET api/v1/menu-items/{id}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `id` |  required  | ID

<!-- END_35253558f1884f62a9b1d770515be85e -->

#Page


<!-- START_7a71b1bd6e258a3884186d2da4d20dbb -->
## Page Get all

> Example request:

```bash
curl -X GET \
    -G "http://api.oksgroup.uz/api/v1/admin/page" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://api.oksgroup.uz/api/v1/admin/page"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "id": "bigint",
    "title": "string",
    "slug": "string",
    "description": "text",
    "type": "integer",
    "file_id": "integer",
    "documents": "string",
    "anons": "string",
    "content": "text",
    "created_at": "datetime",
    "updated_at": "datetime",
    "lang": "integer",
    "lang_hash": "string",
    "status": "integer",
    "deleted_at": "datetime",
    "roles": [
        "admin"
    ]
}
```

### HTTP Request
`GET api/v1/admin/page`


<!-- END_7a71b1bd6e258a3884186d2da4d20dbb -->

<!-- START_8ca1a01257b0cd52ce3101c8e5d1f2d9 -->
## Page create

> Example request:

```bash
curl -X POST \
    "http://api.oksgroup.uz/api/v1/admin/page" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"id":"unde","title":"dolores","slug":"vel","description":"tempora","type":4,"file_id":6,"documents":"magnam","anons":"fuga","content":"qui","created_at":"et","updated_at":"nisi","lang":17,"lang_hash":"et","status":19,"deleted_at":"odit"}'

```

```javascript
const url = new URL(
    "http://api.oksgroup.uz/api/v1/admin/page"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "id": "unde",
    "title": "dolores",
    "slug": "vel",
    "description": "tempora",
    "type": 4,
    "file_id": 6,
    "documents": "magnam",
    "anons": "fuga",
    "content": "qui",
    "created_at": "et",
    "updated_at": "nisi",
    "lang": 17,
    "lang_hash": "et",
    "status": 19,
    "deleted_at": "odit"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/v1/admin/page`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `id` | bigint |  optional  | no-required id
        `title` | string |  optional  | no-required title
        `slug` | string |  optional  | no-required slug
        `description` | text |  optional  | no-required description
        `type` | integer |  optional  | no-required type
        `file_id` | integer |  optional  | no-required file_id
        `documents` | string |  optional  | no-required documents
        `anons` | string |  optional  | no-required anons
        `content` | text |  optional  | no-required content
        `created_at` | datetime |  optional  | no-required created_at
        `updated_at` | datetime |  optional  | no-required updated_at
        `lang` | integer |  optional  | no-required lang
        `lang_hash` | string |  optional  | no-required lang_hash
        `status` | integer |  optional  | no-required status
        `deleted_at` | datetime |  optional  | no-required deleted_at
    
<!-- END_8ca1a01257b0cd52ce3101c8e5d1f2d9 -->

<!-- START_2a1432b091d28d3f810186fc5f142ccd -->
## Page update

> Example request:

```bash
curl -X PUT \
    "http://api.oksgroup.uz/api/v1/admin/page/1?id=blanditiis" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"id":"eos","title":"ipsam","slug":"dicta","description":"saepe","type":17,"file_id":8,"documents":"accusamus","anons":"expedita","content":"aliquid","created_at":"esse","updated_at":"et","lang":15,"lang_hash":"amet","status":13,"deleted_at":"et"}'

```

```javascript
const url = new URL(
    "http://api.oksgroup.uz/api/v1/admin/page/1"
);

let params = {
    "id": "blanditiis",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "id": "eos",
    "title": "ipsam",
    "slug": "dicta",
    "description": "saepe",
    "type": 17,
    "file_id": 8,
    "documents": "accusamus",
    "anons": "expedita",
    "content": "aliquid",
    "created_at": "esse",
    "updated_at": "et",
    "lang": 15,
    "lang_hash": "amet",
    "status": 13,
    "deleted_at": "et"
}

fetch(url, {
    method: "PUT",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/v1/admin/page/{id}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `id` |  required  | ID
#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `id` | bigint |  optional  | no-required id
        `title` | string |  optional  | no-required title
        `slug` | string |  optional  | no-required slug
        `description` | text |  optional  | no-required description
        `type` | integer |  optional  | no-required type
        `file_id` | integer |  optional  | no-required file_id
        `documents` | string |  optional  | no-required documents
        `anons` | string |  optional  | no-required anons
        `content` | text |  optional  | no-required content
        `created_at` | datetime |  optional  | no-required created_at
        `updated_at` | datetime |  optional  | no-required updated_at
        `lang` | integer |  optional  | no-required lang
        `lang_hash` | string |  optional  | no-required lang_hash
        `status` | integer |  optional  | no-required status
        `deleted_at` | datetime |  optional  | no-required deleted_at
    
<!-- END_2a1432b091d28d3f810186fc5f142ccd -->

<!-- START_eb782792d3558cce7c1f5dc2b7c16a05 -->
## Page view

> Example request:

```bash
curl -X GET \
    -G "http://api.oksgroup.uz/api/v1/admin/page/1?id=nisi" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://api.oksgroup.uz/api/v1/admin/page/1"
);

let params = {
    "id": "nisi",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "id": "bigint",
    "title": "string",
    "slug": "string",
    "description": "text",
    "type": "integer",
    "file_id": "integer",
    "documents": "string",
    "anons": "string",
    "content": "text",
    "created_at": "datetime",
    "updated_at": "datetime",
    "lang": "integer",
    "lang_hash": "string",
    "status": "integer",
    "deleted_at": "datetime",
    "roles": [
        "all"
    ]
}
```

### HTTP Request
`GET api/v1/admin/page/{id}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `id` |  required  | ID

<!-- END_eb782792d3558cce7c1f5dc2b7c16a05 -->

<!-- START_ef591b4b065a8b0c294276fcd8768e70 -->
## Page delete

> Example request:

```bash
curl -X DELETE \
    "http://api.oksgroup.uz/api/v1/admin/page/1?id=necessitatibus" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://api.oksgroup.uz/api/v1/admin/page/1"
);

let params = {
    "id": "necessitatibus",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/v1/admin/page/{id}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `id` |  required  | ID

<!-- END_ef591b4b065a8b0c294276fcd8768e70 -->

<!-- START_0c948efd1d98100112b77e0deeb88b02 -->
## Page Get all

> Example request:

```bash
curl -X GET \
    -G "http://api.oksgroup.uz/api/v1/page" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://api.oksgroup.uz/api/v1/page"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "id": "bigint",
    "title": "string",
    "slug": "string",
    "description": "text",
    "type": "integer",
    "file_id": "integer",
    "documents": "string",
    "anons": "string",
    "content": "text",
    "created_at": "datetime",
    "updated_at": "datetime",
    "lang": "integer",
    "lang_hash": "string",
    "status": "integer",
    "deleted_at": "datetime",
    "roles": [
        "admin"
    ]
}
```

### HTTP Request
`GET api/v1/page`


<!-- END_0c948efd1d98100112b77e0deeb88b02 -->

<!-- START_11eaeebff72e0fe821cd48b15dd88ec1 -->
## Page view

> Example request:

```bash
curl -X GET \
    -G "http://api.oksgroup.uz/api/v1/page/1?id=esse" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://api.oksgroup.uz/api/v1/page/1"
);

let params = {
    "id": "esse",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "id": "bigint",
    "title": "string",
    "slug": "string",
    "description": "text",
    "type": "integer",
    "file_id": "integer",
    "documents": "string",
    "anons": "string",
    "content": "text",
    "created_at": "datetime",
    "updated_at": "datetime",
    "lang": "integer",
    "lang_hash": "string",
    "status": "integer",
    "deleted_at": "datetime",
    "roles": [
        "all"
    ]
}
```

### HTTP Request
`GET api/v1/page/{id}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `id` |  required  | ID

<!-- END_11eaeebff72e0fe821cd48b15dd88ec1 -->

<!-- START_31949943365fe864894e3b31db0ae275 -->
## api/v1/page/{slug}
> Example request:

```bash
curl -X GET \
    -G "http://api.oksgroup.uz/api/v1/page/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://api.oksgroup.uz/api/v1/page/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (404):

```json
{
    "message": "No query results for model [App\\Models\\Page] 1"
}
```

### HTTP Request
`GET api/v1/page/{slug}`


<!-- END_31949943365fe864894e3b31db0ae275 -->

#Partner


<!-- START_17bddd20a4c87437fa8aeed3eacce1ab -->
## Partner Get all

> Example request:

```bash
curl -X GET \
    -G "http://api.oksgroup.uz/api/v1/admin/partner" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://api.oksgroup.uz/api/v1/admin/partner"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "id": "bigint",
    "link": "string",
    "sort": "integer",
    "lang": "integer",
    "lang_hash": "string",
    "status": "integer",
    "file_id": "integer",
    "deleted_at": "datetime",
    "created_at": "datetime",
    "updated_at": "datetime",
    "roles": [
        "admin"
    ]
}
```

### HTTP Request
`GET api/v1/admin/partner`


<!-- END_17bddd20a4c87437fa8aeed3eacce1ab -->

<!-- START_deb9853916649f5df03f8e4d4dad1cef -->
## Partner create

> Example request:

```bash
curl -X POST \
    "http://api.oksgroup.uz/api/v1/admin/partner" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"id":"amet","link":"ut","sort":2,"lang":10,"lang_hash":"voluptas","status":19,"file_id":20,"deleted_at":"aperiam","created_at":"maiores","updated_at":"eveniet"}'

```

```javascript
const url = new URL(
    "http://api.oksgroup.uz/api/v1/admin/partner"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "id": "amet",
    "link": "ut",
    "sort": 2,
    "lang": 10,
    "lang_hash": "voluptas",
    "status": 19,
    "file_id": 20,
    "deleted_at": "aperiam",
    "created_at": "maiores",
    "updated_at": "eveniet"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/v1/admin/partner`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `id` | bigint |  optional  | no-required id
        `link` | string |  optional  | no-required link
        `sort` | integer |  optional  | no-required sort
        `lang` | integer |  optional  | no-required lang
        `lang_hash` | string |  optional  | no-required lang_hash
        `status` | integer |  optional  | no-required status
        `file_id` | integer |  optional  | no-required file_id
        `deleted_at` | datetime |  optional  | no-required deleted_at
        `created_at` | datetime |  optional  | no-required created_at
        `updated_at` | datetime |  optional  | no-required updated_at
    
<!-- END_deb9853916649f5df03f8e4d4dad1cef -->

<!-- START_78c30cfbfbde3d0721ac1d17c1dd720b -->
## Partner update

> Example request:

```bash
curl -X PUT \
    "http://api.oksgroup.uz/api/v1/admin/partner/1?id=atque" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"id":"voluptate","link":"qui","sort":12,"lang":17,"lang_hash":"et","status":3,"file_id":3,"deleted_at":"vel","created_at":"quia","updated_at":"doloremque"}'

```

```javascript
const url = new URL(
    "http://api.oksgroup.uz/api/v1/admin/partner/1"
);

let params = {
    "id": "atque",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "id": "voluptate",
    "link": "qui",
    "sort": 12,
    "lang": 17,
    "lang_hash": "et",
    "status": 3,
    "file_id": 3,
    "deleted_at": "vel",
    "created_at": "quia",
    "updated_at": "doloremque"
}

fetch(url, {
    method: "PUT",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/v1/admin/partner/{id}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `id` |  required  | ID
#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `id` | bigint |  optional  | no-required id
        `link` | string |  optional  | no-required link
        `sort` | integer |  optional  | no-required sort
        `lang` | integer |  optional  | no-required lang
        `lang_hash` | string |  optional  | no-required lang_hash
        `status` | integer |  optional  | no-required status
        `file_id` | integer |  optional  | no-required file_id
        `deleted_at` | datetime |  optional  | no-required deleted_at
        `created_at` | datetime |  optional  | no-required created_at
        `updated_at` | datetime |  optional  | no-required updated_at
    
<!-- END_78c30cfbfbde3d0721ac1d17c1dd720b -->

<!-- START_626dbf99f6c62d6eb95752306e021e24 -->
## Partner view

> Example request:

```bash
curl -X GET \
    -G "http://api.oksgroup.uz/api/v1/admin/partner/1?id=unde" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://api.oksgroup.uz/api/v1/admin/partner/1"
);

let params = {
    "id": "unde",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "id": "bigint",
    "link": "string",
    "sort": "integer",
    "lang": "integer",
    "lang_hash": "string",
    "status": "integer",
    "file_id": "integer",
    "deleted_at": "datetime",
    "created_at": "datetime",
    "updated_at": "datetime",
    "roles": [
        "all"
    ]
}
```

### HTTP Request
`GET api/v1/admin/partner/{id}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `id` |  required  | ID

<!-- END_626dbf99f6c62d6eb95752306e021e24 -->

<!-- START_0d6ebb479928dcefd932219144f41750 -->
## Partner delete

> Example request:

```bash
curl -X DELETE \
    "http://api.oksgroup.uz/api/v1/admin/partner/1?id=omnis" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://api.oksgroup.uz/api/v1/admin/partner/1"
);

let params = {
    "id": "omnis",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/v1/admin/partner/{id}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `id` |  required  | ID

<!-- END_0d6ebb479928dcefd932219144f41750 -->

<!-- START_c55e72928aa3e496ab9ec0ac3c9e7bec -->
## Partner Get all

> Example request:

```bash
curl -X GET \
    -G "http://api.oksgroup.uz/api/v1/partner" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://api.oksgroup.uz/api/v1/partner"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "id": "bigint",
    "link": "string",
    "sort": "integer",
    "lang": "integer",
    "lang_hash": "string",
    "status": "integer",
    "file_id": "integer",
    "deleted_at": "datetime",
    "created_at": "datetime",
    "updated_at": "datetime",
    "roles": [
        "admin"
    ]
}
```

### HTTP Request
`GET api/v1/partner`


<!-- END_c55e72928aa3e496ab9ec0ac3c9e7bec -->

<!-- START_b2193d403a9a6c08ad5a36c7856cc31a -->
## Partner view

> Example request:

```bash
curl -X GET \
    -G "http://api.oksgroup.uz/api/v1/partner/1?id=esse" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://api.oksgroup.uz/api/v1/partner/1"
);

let params = {
    "id": "esse",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "id": "bigint",
    "link": "string",
    "sort": "integer",
    "lang": "integer",
    "lang_hash": "string",
    "status": "integer",
    "file_id": "integer",
    "deleted_at": "datetime",
    "created_at": "datetime",
    "updated_at": "datetime",
    "roles": [
        "all"
    ]
}
```

### HTTP Request
`GET api/v1/partner/{id}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `id` |  required  | ID

<!-- END_b2193d403a9a6c08ad5a36c7856cc31a -->

#Post


<!-- START_bdfe5b11e6ffb9352135c5fee8abba56 -->
## Post Get all

> Example request:

```bash
curl -X GET \
    -G "http://api.oksgroup.uz/api/v1/admin/post" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://api.oksgroup.uz/api/v1/admin/post"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "id": "bigint",
    "title": "string",
    "description": "string",
    "content": "text",
    "slug": "string",
    "top": "integer",
    "popular": "integer",
    "type": "integer",
    "file_id": "integer",
    "documents": "string",
    "video": "string",
    "photo_author": "string",
    "published_at": "datetime",
    "created_at": "datetime",
    "updated_at": "datetime",
    "lang": "integer",
    "lang_hash": "string",
    "status": "integer",
    "deleted_at": "datetime",
    "roles": [
        "admin"
    ]
}
```

### HTTP Request
`GET api/v1/admin/post`


<!-- END_bdfe5b11e6ffb9352135c5fee8abba56 -->

<!-- START_1c6a567110c15f04c382062ba6491910 -->
## Post create

> Example request:

```bash
curl -X POST \
    "http://api.oksgroup.uz/api/v1/admin/post" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"id":"et","title":"neque","description":"eaque","content":"in","slug":"aut","top":16,"popular":4,"type":7,"file_id":1,"documents":"sunt","video":"omnis","photo_author":"et","published_at":"voluptatem","created_at":"facilis","updated_at":"sint","lang":11,"lang_hash":"et","status":20,"deleted_at":"aliquam"}'

```

```javascript
const url = new URL(
    "http://api.oksgroup.uz/api/v1/admin/post"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "id": "et",
    "title": "neque",
    "description": "eaque",
    "content": "in",
    "slug": "aut",
    "top": 16,
    "popular": 4,
    "type": 7,
    "file_id": 1,
    "documents": "sunt",
    "video": "omnis",
    "photo_author": "et",
    "published_at": "voluptatem",
    "created_at": "facilis",
    "updated_at": "sint",
    "lang": 11,
    "lang_hash": "et",
    "status": 20,
    "deleted_at": "aliquam"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/v1/admin/post`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `id` | bigint |  optional  | no-required id
        `title` | string |  optional  | no-required title
        `description` | string |  optional  | no-required description
        `content` | text |  optional  | no-required content
        `slug` | string |  optional  | no-required slug
        `top` | integer |  optional  | no-required top
        `popular` | integer |  optional  | no-required popular
        `type` | integer |  optional  | no-required type
        `file_id` | integer |  optional  | no-required file_id
        `documents` | string |  optional  | no-required documents
        `video` | string |  optional  | no-required video
        `photo_author` | string |  optional  | no-required photo_author
        `published_at` | datetime |  optional  | no-required published_at
        `created_at` | datetime |  optional  | no-required created_at
        `updated_at` | datetime |  optional  | no-required updated_at
        `lang` | integer |  optional  | no-required lang
        `lang_hash` | string |  optional  | no-required lang_hash
        `status` | integer |  optional  | no-required status
        `deleted_at` | datetime |  optional  | no-required deleted_at
    
<!-- END_1c6a567110c15f04c382062ba6491910 -->

<!-- START_15785e46bdb4bc33d8bab7f3c0326342 -->
## Post update

> Example request:

```bash
curl -X PUT \
    "http://api.oksgroup.uz/api/v1/admin/post/1?id=ex" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"id":"quo","title":"voluptas","description":"quia","content":"et","slug":"voluptatem","top":18,"popular":15,"type":11,"file_id":1,"documents":"ratione","video":"ipsum","photo_author":"voluptas","published_at":"cum","created_at":"alias","updated_at":"quia","lang":17,"lang_hash":"qui","status":18,"deleted_at":"et"}'

```

```javascript
const url = new URL(
    "http://api.oksgroup.uz/api/v1/admin/post/1"
);

let params = {
    "id": "ex",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "id": "quo",
    "title": "voluptas",
    "description": "quia",
    "content": "et",
    "slug": "voluptatem",
    "top": 18,
    "popular": 15,
    "type": 11,
    "file_id": 1,
    "documents": "ratione",
    "video": "ipsum",
    "photo_author": "voluptas",
    "published_at": "cum",
    "created_at": "alias",
    "updated_at": "quia",
    "lang": 17,
    "lang_hash": "qui",
    "status": 18,
    "deleted_at": "et"
}

fetch(url, {
    method: "PUT",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/v1/admin/post/{id}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `id` |  required  | ID
#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `id` | bigint |  optional  | no-required id
        `title` | string |  optional  | no-required title
        `description` | string |  optional  | no-required description
        `content` | text |  optional  | no-required content
        `slug` | string |  optional  | no-required slug
        `top` | integer |  optional  | no-required top
        `popular` | integer |  optional  | no-required popular
        `type` | integer |  optional  | no-required type
        `file_id` | integer |  optional  | no-required file_id
        `documents` | string |  optional  | no-required documents
        `video` | string |  optional  | no-required video
        `photo_author` | string |  optional  | no-required photo_author
        `published_at` | datetime |  optional  | no-required published_at
        `created_at` | datetime |  optional  | no-required created_at
        `updated_at` | datetime |  optional  | no-required updated_at
        `lang` | integer |  optional  | no-required lang
        `lang_hash` | string |  optional  | no-required lang_hash
        `status` | integer |  optional  | no-required status
        `deleted_at` | datetime |  optional  | no-required deleted_at
    
<!-- END_15785e46bdb4bc33d8bab7f3c0326342 -->

<!-- START_f962b39ada52df6f28eb7e49876bde65 -->
## Post view

> Example request:

```bash
curl -X GET \
    -G "http://api.oksgroup.uz/api/v1/admin/post/1?id=asperiores" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://api.oksgroup.uz/api/v1/admin/post/1"
);

let params = {
    "id": "asperiores",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "id": "bigint",
    "title": "string",
    "description": "string",
    "content": "text",
    "slug": "string",
    "top": "integer",
    "popular": "integer",
    "type": "integer",
    "file_id": "integer",
    "documents": "string",
    "video": "string",
    "photo_author": "string",
    "published_at": "datetime",
    "created_at": "datetime",
    "updated_at": "datetime",
    "lang": "integer",
    "lang_hash": "string",
    "status": "integer",
    "deleted_at": "datetime",
    "roles": [
        "all"
    ]
}
```

### HTTP Request
`GET api/v1/admin/post/{id}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `id` |  required  | ID

<!-- END_f962b39ada52df6f28eb7e49876bde65 -->

<!-- START_6322b3410e0903cba77d822597f16ea3 -->
## Post delete

> Example request:

```bash
curl -X DELETE \
    "http://api.oksgroup.uz/api/v1/admin/post/1?id=cum" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://api.oksgroup.uz/api/v1/admin/post/1"
);

let params = {
    "id": "cum",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/v1/admin/post/{id}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `id` |  required  | ID

<!-- END_6322b3410e0903cba77d822597f16ea3 -->

<!-- START_c21ce65c24ad7b3228752eb282145bb4 -->
## Post Get all

> Example request:

```bash
curl -X GET \
    -G "http://api.oksgroup.uz/api/v1/post" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://api.oksgroup.uz/api/v1/post"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "id": "bigint",
    "title": "string",
    "description": "string",
    "content": "text",
    "slug": "string",
    "top": "integer",
    "popular": "integer",
    "type": "integer",
    "file_id": "integer",
    "documents": "string",
    "video": "string",
    "photo_author": "string",
    "published_at": "datetime",
    "created_at": "datetime",
    "updated_at": "datetime",
    "lang": "integer",
    "lang_hash": "string",
    "status": "integer",
    "deleted_at": "datetime",
    "roles": [
        "admin"
    ]
}
```

### HTTP Request
`GET api/v1/post`


<!-- END_c21ce65c24ad7b3228752eb282145bb4 -->

<!-- START_2efd298312c3820d1bea7c29befbe5fa -->
## Post view

> Example request:

```bash
curl -X GET \
    -G "http://api.oksgroup.uz/api/v1/post/1?id=reiciendis" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://api.oksgroup.uz/api/v1/post/1"
);

let params = {
    "id": "reiciendis",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "id": "bigint",
    "title": "string",
    "description": "string",
    "content": "text",
    "slug": "string",
    "top": "integer",
    "popular": "integer",
    "type": "integer",
    "file_id": "integer",
    "documents": "string",
    "video": "string",
    "photo_author": "string",
    "published_at": "datetime",
    "created_at": "datetime",
    "updated_at": "datetime",
    "lang": "integer",
    "lang_hash": "string",
    "status": "integer",
    "deleted_at": "datetime",
    "roles": [
        "all"
    ]
}
```

### HTTP Request
`GET api/v1/post/{id}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `id` |  required  | ID

<!-- END_2efd298312c3820d1bea7c29befbe5fa -->

<!-- START_76d633df675c5a00ff17cd3154e7a999 -->
## api/v1/post/{slug}
> Example request:

```bash
curl -X GET \
    -G "http://api.oksgroup.uz/api/v1/post/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://api.oksgroup.uz/api/v1/post/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (404):

```json
{
    "message": "No query results for model [App\\Models\\Post] 1"
}
```

### HTTP Request
`GET api/v1/post/{slug}`


<!-- END_76d633df675c5a00ff17cd3154e7a999 -->

#Settings


<!-- START_bb368aac5e0c8783f374f190bedb96da -->
## Settings Get all

> Example request:

```bash
curl -X GET \
    -G "http://api.oksgroup.uz/api/v1/admin/settings" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://api.oksgroup.uz/api/v1/admin/settings"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "id": "bigint",
    "name": "string",
    "value": "string",
    "file_id": "integer",
    "slug": "string",
    "link": "string",
    "alias": "string",
    "lang_hash": "string",
    "sort": "integer",
    "lang": "integer",
    "status": "integer",
    "deleted_at": "datetime",
    "created_at": "datetime",
    "updated_at": "datetime",
    "roles": [
        "admin"
    ],
    "include": [
        "file"
    ]
}
```

### HTTP Request
`GET api/v1/admin/settings`


<!-- END_bb368aac5e0c8783f374f190bedb96da -->

<!-- START_c7eb2c98d1e8ae7a81c3bc3e32bc220e -->
## Settings create

> Example request:

```bash
curl -X POST \
    "http://api.oksgroup.uz/api/v1/admin/settings" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"id":"placeat","name":"aliquid","value":"libero","file_id":15,"slug":"nesciunt","link":"consequatur","alias":"aliquid","lang_hash":"vel","sort":17,"lang":2,"status":9,"deleted_at":"fugit","created_at":"reprehenderit","updated_at":"illo"}'

```

```javascript
const url = new URL(
    "http://api.oksgroup.uz/api/v1/admin/settings"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "id": "placeat",
    "name": "aliquid",
    "value": "libero",
    "file_id": 15,
    "slug": "nesciunt",
    "link": "consequatur",
    "alias": "aliquid",
    "lang_hash": "vel",
    "sort": 17,
    "lang": 2,
    "status": 9,
    "deleted_at": "fugit",
    "created_at": "reprehenderit",
    "updated_at": "illo"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/v1/admin/settings`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `id` | bigint |  optional  | no-required id
        `name` | string |  optional  | no-required name
        `value` | string |  optional  | no-required value
        `file_id` | integer |  optional  | no-required file_id
        `slug` | string |  optional  | no-required slug
        `link` | string |  optional  | no-required link
        `alias` | string |  optional  | no-required alias
        `lang_hash` | string |  optional  | no-required lang_hash
        `sort` | integer |  optional  | no-required sort
        `lang` | integer |  optional  | no-required lang
        `status` | integer |  optional  | no-required status
        `deleted_at` | datetime |  optional  | no-required deleted_at
        `created_at` | datetime |  optional  | no-required created_at
        `updated_at` | datetime |  optional  | no-required updated_at
    
<!-- END_c7eb2c98d1e8ae7a81c3bc3e32bc220e -->

<!-- START_f59f6b955fb8574203828f15d21c1f85 -->
## Settings update

> Example request:

```bash
curl -X PUT \
    "http://api.oksgroup.uz/api/v1/admin/settings/1?id=illo" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"id":"ex","name":"iste","value":"quia","file_id":8,"slug":"quis","link":"sunt","alias":"quaerat","lang_hash":"praesentium","sort":1,"lang":14,"status":18,"deleted_at":"rerum","created_at":"deserunt","updated_at":"nobis"}'

```

```javascript
const url = new URL(
    "http://api.oksgroup.uz/api/v1/admin/settings/1"
);

let params = {
    "id": "illo",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "id": "ex",
    "name": "iste",
    "value": "quia",
    "file_id": 8,
    "slug": "quis",
    "link": "sunt",
    "alias": "quaerat",
    "lang_hash": "praesentium",
    "sort": 1,
    "lang": 14,
    "status": 18,
    "deleted_at": "rerum",
    "created_at": "deserunt",
    "updated_at": "nobis"
}

fetch(url, {
    method: "PUT",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/v1/admin/settings/{id}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `id` |  required  | ID
#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `id` | bigint |  optional  | no-required id
        `name` | string |  optional  | no-required name
        `value` | string |  optional  | no-required value
        `file_id` | integer |  optional  | no-required file_id
        `slug` | string |  optional  | no-required slug
        `link` | string |  optional  | no-required link
        `alias` | string |  optional  | no-required alias
        `lang_hash` | string |  optional  | no-required lang_hash
        `sort` | integer |  optional  | no-required sort
        `lang` | integer |  optional  | no-required lang
        `status` | integer |  optional  | no-required status
        `deleted_at` | datetime |  optional  | no-required deleted_at
        `created_at` | datetime |  optional  | no-required created_at
        `updated_at` | datetime |  optional  | no-required updated_at
    
<!-- END_f59f6b955fb8574203828f15d21c1f85 -->

<!-- START_b177116d01d38b1ea00bb5899b048445 -->
## Settings view

> Example request:

```bash
curl -X GET \
    -G "http://api.oksgroup.uz/api/v1/admin/settings/1?id=non" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://api.oksgroup.uz/api/v1/admin/settings/1"
);

let params = {
    "id": "non",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "id": "bigint",
    "name": "string",
    "value": "string",
    "file_id": "integer",
    "slug": "string",
    "link": "string",
    "alias": "string",
    "lang_hash": "string",
    "sort": "integer",
    "lang": "integer",
    "status": "integer",
    "deleted_at": "datetime",
    "created_at": "datetime",
    "updated_at": "datetime",
    "roles": [
        "all"
    ]
}
```

### HTTP Request
`GET api/v1/admin/settings/{id}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `id` |  required  | ID

<!-- END_b177116d01d38b1ea00bb5899b048445 -->

<!-- START_d18ac32b6b0a3692f9dbb33341c411e4 -->
## Settings delete

> Example request:

```bash
curl -X DELETE \
    "http://api.oksgroup.uz/api/v1/admin/settings/1?id=neque" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://api.oksgroup.uz/api/v1/admin/settings/1"
);

let params = {
    "id": "neque",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/v1/admin/settings/{id}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `id` |  required  | ID

<!-- END_d18ac32b6b0a3692f9dbb33341c411e4 -->

<!-- START_0f7c405a059a084f42490f2decb1584b -->
## Settings Get all

> Example request:

```bash
curl -X GET \
    -G "http://api.oksgroup.uz/api/v1/settings" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://api.oksgroup.uz/api/v1/settings"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "id": "bigint",
    "name": "string",
    "value": "string",
    "file_id": "integer",
    "slug": "string",
    "link": "string",
    "alias": "string",
    "lang_hash": "string",
    "sort": "integer",
    "lang": "integer",
    "status": "integer",
    "deleted_at": "datetime",
    "created_at": "datetime",
    "updated_at": "datetime",
    "roles": [
        "admin"
    ],
    "include": [
        "file"
    ]
}
```

### HTTP Request
`GET api/v1/settings`


<!-- END_0f7c405a059a084f42490f2decb1584b -->

<!-- START_53cf901728da55cbcf48dc43b1c2bc93 -->
## Settings view

> Example request:

```bash
curl -X GET \
    -G "http://api.oksgroup.uz/api/v1/settings/1?id=ut" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://api.oksgroup.uz/api/v1/settings/1"
);

let params = {
    "id": "ut",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "id": "bigint",
    "name": "string",
    "value": "string",
    "file_id": "integer",
    "slug": "string",
    "link": "string",
    "alias": "string",
    "lang_hash": "string",
    "sort": "integer",
    "lang": "integer",
    "status": "integer",
    "deleted_at": "datetime",
    "created_at": "datetime",
    "updated_at": "datetime",
    "roles": [
        "all"
    ]
}
```

### HTTP Request
`GET api/v1/settings/{id}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `id` |  required  | ID

<!-- END_53cf901728da55cbcf48dc43b1c2bc93 -->

<!-- START_c674db53bc3180e8b31822aff2533d2e -->
## api/v1/settings/{slug}
> Example request:

```bash
curl -X GET \
    -G "http://api.oksgroup.uz/api/v1/settings/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://api.oksgroup.uz/api/v1/settings/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (404):

```json
{
    "message": "No query results for model [App\\Models\\Settings] 1"
}
```

### HTTP Request
`GET api/v1/settings/{slug}`


<!-- END_c674db53bc3180e8b31822aff2533d2e -->

#Statistic


<!-- START_190fe373c7dc11179819f64ee8265df5 -->
## Statistic Get all

> Example request:

```bash
curl -X GET \
    -G "http://api.oksgroup.uz/api/v1/admin/statistics" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://api.oksgroup.uz/api/v1/admin/statistics"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "id": "bigint",
    "title": "string",
    "alias": "string",
    "status": "integer",
    "type": "integer",
    "lang": "integer",
    "lang_hash": "string",
    "created_at": "datetime",
    "updated_at": "datetime",
    "roles": [
        "admin"
    ]
}
```

### HTTP Request
`GET api/v1/admin/statistics`


<!-- END_190fe373c7dc11179819f64ee8265df5 -->

<!-- START_9094552e6d9d9a4dfa922e637a2cd1af -->
## Statistic create

> Example request:

```bash
curl -X POST \
    "http://api.oksgroup.uz/api/v1/admin/statistics" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"id":"aliquam","title":"ut","alias":"exercitationem","status":4,"type":11,"lang":20,"lang_hash":"quo","created_at":"nam","updated_at":"fugiat"}'

```

```javascript
const url = new URL(
    "http://api.oksgroup.uz/api/v1/admin/statistics"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "id": "aliquam",
    "title": "ut",
    "alias": "exercitationem",
    "status": 4,
    "type": 11,
    "lang": 20,
    "lang_hash": "quo",
    "created_at": "nam",
    "updated_at": "fugiat"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/v1/admin/statistics`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `id` | bigint |  optional  | no-required id
        `title` | string |  optional  | no-required title
        `alias` | string |  optional  | no-required alias
        `status` | integer |  optional  | no-required status
        `type` | integer |  optional  | no-required type
        `lang` | integer |  optional  | no-required lang
        `lang_hash` | string |  optional  | no-required lang_hash
        `created_at` | datetime |  optional  | no-required created_at
        `updated_at` | datetime |  optional  | no-required updated_at
    
<!-- END_9094552e6d9d9a4dfa922e637a2cd1af -->

<!-- START_06cae353f723060e3c426dbcfe5ad2e3 -->
## Statistic update

> Example request:

```bash
curl -X PUT \
    "http://api.oksgroup.uz/api/v1/admin/statistics/1?id=accusamus" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"id":"totam","title":"magnam","alias":"rerum","status":1,"type":17,"lang":7,"lang_hash":"omnis","created_at":"et","updated_at":"iure"}'

```

```javascript
const url = new URL(
    "http://api.oksgroup.uz/api/v1/admin/statistics/1"
);

let params = {
    "id": "accusamus",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "id": "totam",
    "title": "magnam",
    "alias": "rerum",
    "status": 1,
    "type": 17,
    "lang": 7,
    "lang_hash": "omnis",
    "created_at": "et",
    "updated_at": "iure"
}

fetch(url, {
    method: "PUT",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/v1/admin/statistics/{id}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `id` |  required  | ID
#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `id` | bigint |  optional  | no-required id
        `title` | string |  optional  | no-required title
        `alias` | string |  optional  | no-required alias
        `status` | integer |  optional  | no-required status
        `type` | integer |  optional  | no-required type
        `lang` | integer |  optional  | no-required lang
        `lang_hash` | string |  optional  | no-required lang_hash
        `created_at` | datetime |  optional  | no-required created_at
        `updated_at` | datetime |  optional  | no-required updated_at
    
<!-- END_06cae353f723060e3c426dbcfe5ad2e3 -->

<!-- START_13966b28b34ae1ab475c45d882898c80 -->
## Statistic view

> Example request:

```bash
curl -X GET \
    -G "http://api.oksgroup.uz/api/v1/admin/statistics/1?id=ea" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://api.oksgroup.uz/api/v1/admin/statistics/1"
);

let params = {
    "id": "ea",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "id": "bigint",
    "title": "string",
    "alias": "string",
    "status": "integer",
    "type": "integer",
    "lang": "integer",
    "lang_hash": "string",
    "created_at": "datetime",
    "updated_at": "datetime",
    "roles": [
        "all"
    ]
}
```

### HTTP Request
`GET api/v1/admin/statistics/{id}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `id` |  required  | ID

<!-- END_13966b28b34ae1ab475c45d882898c80 -->

<!-- START_90dbfa7fcf4c0dbdaab32e082fbe003b -->
## Statistic delete

> Example request:

```bash
curl -X DELETE \
    "http://api.oksgroup.uz/api/v1/admin/statistics/1?id=aut" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://api.oksgroup.uz/api/v1/admin/statistics/1"
);

let params = {
    "id": "aut",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/v1/admin/statistics/{id}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `id` |  required  | ID

<!-- END_90dbfa7fcf4c0dbdaab32e082fbe003b -->

<!-- START_0b9db5451a398dfc660c0d16d86a8985 -->
## Statistic Get all

> Example request:

```bash
curl -X GET \
    -G "http://api.oksgroup.uz/api/v1/statistics" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://api.oksgroup.uz/api/v1/statistics"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "id": "bigint",
    "title": "string",
    "alias": "string",
    "status": "integer",
    "type": "integer",
    "lang": "integer",
    "lang_hash": "string",
    "created_at": "datetime",
    "updated_at": "datetime",
    "roles": [
        "admin"
    ]
}
```

### HTTP Request
`GET api/v1/statistics`


<!-- END_0b9db5451a398dfc660c0d16d86a8985 -->

<!-- START_70f7f4837e6fc52e931517dfc86fc342 -->
## Statistic view

> Example request:

```bash
curl -X GET \
    -G "http://api.oksgroup.uz/api/v1/statistics/1?id=accusamus" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://api.oksgroup.uz/api/v1/statistics/1"
);

let params = {
    "id": "accusamus",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "id": "bigint",
    "title": "string",
    "alias": "string",
    "status": "integer",
    "type": "integer",
    "lang": "integer",
    "lang_hash": "string",
    "created_at": "datetime",
    "updated_at": "datetime",
    "roles": [
        "all"
    ]
}
```

### HTTP Request
`GET api/v1/statistics/{id}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `id` |  required  | ID

<!-- END_70f7f4837e6fc52e931517dfc86fc342 -->

#StatisticItem


<!-- START_2f219d501cf06e6090d885515a413a94 -->
## StatisticItem Get all

> Example request:

```bash
curl -X GET \
    -G "http://api.oksgroup.uz/api/v1/admin/statisticitem" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://api.oksgroup.uz/api/v1/admin/statisticitem"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "created_at": "datetime",
    "deleted_at": "datetime",
    "description": "string",
    "file_id": "integer",
    "id": "bigint",
    "parent_id": "integer",
    "secondary": "string",
    "sort": "integer",
    "status": "integer",
    "title": "string",
    "updated_at": "datetime",
    "roles": [
        "admin"
    ]
}
```

### HTTP Request
`GET api/v1/admin/statisticitem`


<!-- END_2f219d501cf06e6090d885515a413a94 -->

<!-- START_f5b375b37a1913769b9cbfab1cc9e514 -->
## StatisticItem create

> Example request:

```bash
curl -X POST \
    "http://api.oksgroup.uz/api/v1/admin/statisticitem" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"created_at":"molestias","deleted_at":"qui","description":"nesciunt","file_id":14,"id":"eius","parent_id":15,"secondary":"nisi","sort":3,"status":4,"title":"nesciunt","updated_at":"reiciendis"}'

```

```javascript
const url = new URL(
    "http://api.oksgroup.uz/api/v1/admin/statisticitem"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "created_at": "molestias",
    "deleted_at": "qui",
    "description": "nesciunt",
    "file_id": 14,
    "id": "eius",
    "parent_id": 15,
    "secondary": "nisi",
    "sort": 3,
    "status": 4,
    "title": "nesciunt",
    "updated_at": "reiciendis"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/v1/admin/statisticitem`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `created_at` | datetime |  optional  | no-required created_at
        `deleted_at` | datetime |  optional  | no-required deleted_at
        `description` | string |  optional  | no-required description
        `file_id` | integer |  optional  | no-required file_id
        `id` | bigint |  optional  | no-required id
        `parent_id` | integer |  optional  | no-required parent_id
        `secondary` | string |  optional  | no-required secondary
        `sort` | integer |  optional  | no-required sort
        `status` | integer |  optional  | no-required status
        `title` | string |  optional  | no-required title
        `updated_at` | datetime |  optional  | no-required updated_at
    
<!-- END_f5b375b37a1913769b9cbfab1cc9e514 -->

<!-- START_9c1750d1bd14b30e464ae607e3d5edb9 -->
## StatisticItem update

> Example request:

```bash
curl -X PUT \
    "http://api.oksgroup.uz/api/v1/admin/statisticitem/1?id=eaque" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"created_at":"laudantium","deleted_at":"maxime","description":"ipsa","file_id":5,"id":"dicta","parent_id":8,"secondary":"aut","sort":12,"status":11,"title":"sit","updated_at":"dolorum"}'

```

```javascript
const url = new URL(
    "http://api.oksgroup.uz/api/v1/admin/statisticitem/1"
);

let params = {
    "id": "eaque",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "created_at": "laudantium",
    "deleted_at": "maxime",
    "description": "ipsa",
    "file_id": 5,
    "id": "dicta",
    "parent_id": 8,
    "secondary": "aut",
    "sort": 12,
    "status": 11,
    "title": "sit",
    "updated_at": "dolorum"
}

fetch(url, {
    method: "PUT",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/v1/admin/statisticitem/{id}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `id` |  required  | ID
#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `created_at` | datetime |  optional  | no-required created_at
        `deleted_at` | datetime |  optional  | no-required deleted_at
        `description` | string |  optional  | no-required description
        `file_id` | integer |  optional  | no-required file_id
        `id` | bigint |  optional  | no-required id
        `parent_id` | integer |  optional  | no-required parent_id
        `secondary` | string |  optional  | no-required secondary
        `sort` | integer |  optional  | no-required sort
        `status` | integer |  optional  | no-required status
        `title` | string |  optional  | no-required title
        `updated_at` | datetime |  optional  | no-required updated_at
    
<!-- END_9c1750d1bd14b30e464ae607e3d5edb9 -->

<!-- START_6752255667e7dcd36febb41189265583 -->
## StatisticItem view

> Example request:

```bash
curl -X GET \
    -G "http://api.oksgroup.uz/api/v1/admin/statisticitem/1?id=officia" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://api.oksgroup.uz/api/v1/admin/statisticitem/1"
);

let params = {
    "id": "officia",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "created_at": "datetime",
    "deleted_at": "datetime",
    "description": "string",
    "file_id": "integer",
    "id": "bigint",
    "parent_id": "integer",
    "secondary": "string",
    "sort": "integer",
    "status": "integer",
    "title": "string",
    "updated_at": "datetime",
    "roles": [
        "all"
    ]
}
```

### HTTP Request
`GET api/v1/admin/statisticitem/{id}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `id` |  required  | ID

<!-- END_6752255667e7dcd36febb41189265583 -->

<!-- START_0b1d2a44d90fd7ebfe6661b7440b7d51 -->
## StatisticItem delete

> Example request:

```bash
curl -X DELETE \
    "http://api.oksgroup.uz/api/v1/admin/statisticitem/1?id=est" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://api.oksgroup.uz/api/v1/admin/statisticitem/1"
);

let params = {
    "id": "est",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/v1/admin/statisticitem/{id}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `id` |  required  | ID

<!-- END_0b1d2a44d90fd7ebfe6661b7440b7d51 -->

<!-- START_d621cb64778b1c04a8c91ee69250a4d7 -->
## StatisticItem Get all

> Example request:

```bash
curl -X GET \
    -G "http://api.oksgroup.uz/api/v1/statisticitem" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://api.oksgroup.uz/api/v1/statisticitem"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "created_at": "datetime",
    "deleted_at": "datetime",
    "description": "string",
    "file_id": "integer",
    "id": "bigint",
    "parent_id": "integer",
    "secondary": "string",
    "sort": "integer",
    "status": "integer",
    "title": "string",
    "updated_at": "datetime",
    "roles": [
        "admin"
    ]
}
```

### HTTP Request
`GET api/v1/statisticitem`


<!-- END_d621cb64778b1c04a8c91ee69250a4d7 -->

<!-- START_6213688004509c8707ab9ed1bd9acb55 -->
## StatisticItem view

> Example request:

```bash
curl -X GET \
    -G "http://api.oksgroup.uz/api/v1/statisticitem/1?id=et" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://api.oksgroup.uz/api/v1/statisticitem/1"
);

let params = {
    "id": "et",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "created_at": "datetime",
    "deleted_at": "datetime",
    "description": "string",
    "file_id": "integer",
    "id": "bigint",
    "parent_id": "integer",
    "secondary": "string",
    "sort": "integer",
    "status": "integer",
    "title": "string",
    "updated_at": "datetime",
    "roles": [
        "all"
    ]
}
```

### HTTP Request
`GET api/v1/statisticitem/{id}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `id` |  required  | ID

<!-- END_6213688004509c8707ab9ed1bd9acb55 -->

#User


<!-- START_a10aa585c982194fd4c4619b3a25f98d -->
## User sign-in

> Example request:

```bash
curl -X POST \
    "http://api.oksgroup.uz/api/v1/admin/user/sign-in" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"molestias","password":"reprehenderit"}'

```

```javascript
const url = new URL(
    "http://api.oksgroup.uz/api/v1/admin/user/sign-in"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "molestias",
    "password": "reprehenderit"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/v1/admin/user/sign-in`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `name` | string |  required  | name
        `password` | string |  required  | password
    
<!-- END_a10aa585c982194fd4c4619b3a25f98d -->

<!-- START_9cafc90ccf899b3989f83a1a368ffcd5 -->
## api/v1/admin/user
> Example request:

```bash
curl -X GET \
    -G "http://api.oksgroup.uz/api/v1/admin/user" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://api.oksgroup.uz/api/v1/admin/user"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/v1/admin/user`


<!-- END_9cafc90ccf899b3989f83a1a368ffcd5 -->

<!-- START_63b209fd4db9f1789cf3050b5b5e742e -->
## User get-me

> Example request:

```bash
curl -X GET \
    -G "http://api.oksgroup.uz/api/v1/admin/user/get-me?token=eaque" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://api.oksgroup.uz/api/v1/admin/user/get-me"
);

let params = {
    "token": "eaque",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/v1/admin/user/get-me`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `token` |  optional  | string required token

<!-- END_63b209fd4db9f1789cf3050b5b5e742e -->

<!-- START_0650f5672796d52740f0b0c7143a2e2d -->
## User logout

> Example request:

```bash
curl -X POST \
    "http://api.oksgroup.uz/api/v1/admin/user/logout" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://api.oksgroup.uz/api/v1/admin/user/logout"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/v1/admin/user/logout`


<!-- END_0650f5672796d52740f0b0c7143a2e2d -->

<!-- START_a8f2cd73f7f241bac59f75ba0b3cb4bd -->
## User create

> Example request:

```bash
curl -X POST \
    "http://api.oksgroup.uz/api/v1/admin/user" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://api.oksgroup.uz/api/v1/admin/user"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/v1/admin/user`


<!-- END_a8f2cd73f7f241bac59f75ba0b3cb4bd -->

<!-- START_b84bc995ebaf16fcbb87cec8a93d6d99 -->
## User update

> Example request:

```bash
curl -X PUT \
    "http://api.oksgroup.uz/api/v1/admin/user/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://api.oksgroup.uz/api/v1/admin/user/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/v1/admin/user/{id}`


<!-- END_b84bc995ebaf16fcbb87cec8a93d6d99 -->

<!-- START_b60fec1ab473fb3e428a9fbfee70e275 -->
## Update current user

> Example request:

```bash
curl -X PUT \
    "http://api.oksgroup.uz/api/v1/admin/user/update-admin" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://api.oksgroup.uz/api/v1/admin/user/update-admin"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/v1/admin/user/update-admin`


<!-- END_b60fec1ab473fb3e428a9fbfee70e275 -->

#general


<!-- START_c6c5c00d6ac7f771f157dff4a2889b1a -->
## _debugbar/open
> Example request:

```bash
curl -X GET \
    -G "http://api.oksgroup.uz/_debugbar/open" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://api.oksgroup.uz/_debugbar/open"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (404):

```json
{
    "message": ""
}
```

### HTTP Request
`GET _debugbar/open`


<!-- END_c6c5c00d6ac7f771f157dff4a2889b1a -->

<!-- START_7b167949c615f4a7e7b673f8d5fdaf59 -->
## Return Clockwork output

> Example request:

```bash
curl -X GET \
    -G "http://api.oksgroup.uz/_debugbar/clockwork/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://api.oksgroup.uz/_debugbar/clockwork/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (404):

```json
{
    "message": ""
}
```

### HTTP Request
`GET _debugbar/clockwork/{id}`


<!-- END_7b167949c615f4a7e7b673f8d5fdaf59 -->

<!-- START_5f8a640000f5db43332951f0d77378c4 -->
## Return the stylesheets for the Debugbar

> Example request:

```bash
curl -X GET \
    -G "http://api.oksgroup.uz/_debugbar/assets/stylesheets" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://api.oksgroup.uz/_debugbar/assets/stylesheets"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (404):

```json
{
    "message": ""
}
```

### HTTP Request
`GET _debugbar/assets/stylesheets`


<!-- END_5f8a640000f5db43332951f0d77378c4 -->

<!-- START_db7a887cf930ce3c638a8708fd1a75ee -->
## Return the javascript for the Debugbar

> Example request:

```bash
curl -X GET \
    -G "http://api.oksgroup.uz/_debugbar/assets/javascript" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://api.oksgroup.uz/_debugbar/assets/javascript"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (404):

```json
{
    "message": ""
}
```

### HTTP Request
`GET _debugbar/assets/javascript`


<!-- END_db7a887cf930ce3c638a8708fd1a75ee -->

<!-- START_0973671c4f56e7409202dc85c868d442 -->
## Forget a cache key

> Example request:

```bash
curl -X DELETE \
    "http://api.oksgroup.uz/_debugbar/cache/1/" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://api.oksgroup.uz/_debugbar/cache/1/"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE _debugbar/cache/{key}/{tags?}`


<!-- END_0973671c4f56e7409202dc85c868d442 -->

<!-- START_0c068b4037fb2e47e71bd44bd36e3e2a -->
## Authorize a client to access the user&#039;s account.

> Example request:

```bash
curl -X GET \
    -G "http://api.oksgroup.uz/oauth/authorize" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://api.oksgroup.uz/oauth/authorize"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET oauth/authorize`


<!-- END_0c068b4037fb2e47e71bd44bd36e3e2a -->

<!-- START_e48cc6a0b45dd21b7076ab2c03908687 -->
## Approve the authorization request.

> Example request:

```bash
curl -X POST \
    "http://api.oksgroup.uz/oauth/authorize" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://api.oksgroup.uz/oauth/authorize"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST oauth/authorize`


<!-- END_e48cc6a0b45dd21b7076ab2c03908687 -->

<!-- START_de5d7581ef1275fce2a229b6b6eaad9c -->
## Deny the authorization request.

> Example request:

```bash
curl -X DELETE \
    "http://api.oksgroup.uz/oauth/authorize" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://api.oksgroup.uz/oauth/authorize"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE oauth/authorize`


<!-- END_de5d7581ef1275fce2a229b6b6eaad9c -->

<!-- START_a09d20357336aa979ecd8e3972ac9168 -->
## Authorize a client to access the user&#039;s account.

> Example request:

```bash
curl -X POST \
    "http://api.oksgroup.uz/oauth/token" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://api.oksgroup.uz/oauth/token"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST oauth/token`


<!-- END_a09d20357336aa979ecd8e3972ac9168 -->

<!-- START_d6a56149547e03307199e39e03e12d1c -->
## Get all of the authorized tokens for the authenticated user.

> Example request:

```bash
curl -X GET \
    -G "http://api.oksgroup.uz/oauth/tokens" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://api.oksgroup.uz/oauth/tokens"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET oauth/tokens`


<!-- END_d6a56149547e03307199e39e03e12d1c -->

<!-- START_a9a802c25737cca5324125e5f60b72a5 -->
## Delete the given token.

> Example request:

```bash
curl -X DELETE \
    "http://api.oksgroup.uz/oauth/tokens/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://api.oksgroup.uz/oauth/tokens/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE oauth/tokens/{token_id}`


<!-- END_a9a802c25737cca5324125e5f60b72a5 -->

<!-- START_abe905e69f5d002aa7d26f433676d623 -->
## Get a fresh transient token cookie for the authenticated user.

> Example request:

```bash
curl -X POST \
    "http://api.oksgroup.uz/oauth/token/refresh" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://api.oksgroup.uz/oauth/token/refresh"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST oauth/token/refresh`


<!-- END_abe905e69f5d002aa7d26f433676d623 -->

<!-- START_babcfe12d87b8708f5985e9d39ba8f2c -->
## Get all of the clients for the authenticated user.

> Example request:

```bash
curl -X GET \
    -G "http://api.oksgroup.uz/oauth/clients" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://api.oksgroup.uz/oauth/clients"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET oauth/clients`


<!-- END_babcfe12d87b8708f5985e9d39ba8f2c -->

<!-- START_9eabf8d6e4ab449c24c503fcb42fba82 -->
## Store a new client.

> Example request:

```bash
curl -X POST \
    "http://api.oksgroup.uz/oauth/clients" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://api.oksgroup.uz/oauth/clients"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST oauth/clients`


<!-- END_9eabf8d6e4ab449c24c503fcb42fba82 -->

<!-- START_784aec390a455073fc7464335c1defa1 -->
## Update the given client.

> Example request:

```bash
curl -X PUT \
    "http://api.oksgroup.uz/oauth/clients/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://api.oksgroup.uz/oauth/clients/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT oauth/clients/{client_id}`


<!-- END_784aec390a455073fc7464335c1defa1 -->

<!-- START_1f65a511dd86ba0541d7ba13ca57e364 -->
## Delete the given client.

> Example request:

```bash
curl -X DELETE \
    "http://api.oksgroup.uz/oauth/clients/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://api.oksgroup.uz/oauth/clients/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE oauth/clients/{client_id}`


<!-- END_1f65a511dd86ba0541d7ba13ca57e364 -->

<!-- START_9e281bd3a1eb1d9eb63190c8effb607c -->
## Get all of the available scopes for the application.

> Example request:

```bash
curl -X GET \
    -G "http://api.oksgroup.uz/oauth/scopes" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://api.oksgroup.uz/oauth/scopes"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET oauth/scopes`


<!-- END_9e281bd3a1eb1d9eb63190c8effb607c -->

<!-- START_9b2a7699ce6214a79e0fd8107f8b1c9e -->
## Get all of the personal access tokens for the authenticated user.

> Example request:

```bash
curl -X GET \
    -G "http://api.oksgroup.uz/oauth/personal-access-tokens" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://api.oksgroup.uz/oauth/personal-access-tokens"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET oauth/personal-access-tokens`


<!-- END_9b2a7699ce6214a79e0fd8107f8b1c9e -->

<!-- START_a8dd9c0a5583742e671711f9bb3ee406 -->
## Create a new personal access token for the user.

> Example request:

```bash
curl -X POST \
    "http://api.oksgroup.uz/oauth/personal-access-tokens" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://api.oksgroup.uz/oauth/personal-access-tokens"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST oauth/personal-access-tokens`


<!-- END_a8dd9c0a5583742e671711f9bb3ee406 -->

<!-- START_bae65df80fd9d72a01439241a9ea20d0 -->
## Delete the given token.

> Example request:

```bash
curl -X DELETE \
    "http://api.oksgroup.uz/oauth/personal-access-tokens/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://api.oksgroup.uz/oauth/personal-access-tokens/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE oauth/personal-access-tokens/{token_id}`


<!-- END_bae65df80fd9d72a01439241a9ea20d0 -->

<!-- START_f71d42906b47ab713f8411c8c493e506 -->
## api/v1/admin/translations/list
> Example request:

```bash
curl -X GET \
    -G "http://api.oksgroup.uz/api/v1/admin/translations/list" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://api.oksgroup.uz/api/v1/admin/translations/list"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/v1/admin/translations/list`


<!-- END_f71d42906b47ab713f8411c8c493e506 -->

<!-- START_c96cc5a0466d8a5baba7befaeae42249 -->
## api/v1/admin/translations/list
> Example request:

```bash
curl -X PUT \
    "http://api.oksgroup.uz/api/v1/admin/translations/list" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://api.oksgroup.uz/api/v1/admin/translations/list"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/v1/admin/translations/list`


<!-- END_c96cc5a0466d8a5baba7befaeae42249 -->

<!-- START_5be9faf9b0d7c45424171e8d54f6cd0b -->
## api/v1/admin/translations/{id}
> Example request:

```bash
curl -X DELETE \
    "http://api.oksgroup.uz/api/v1/admin/translations/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://api.oksgroup.uz/api/v1/admin/translations/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/v1/admin/translations/{id}`


<!-- END_5be9faf9b0d7c45424171e8d54f6cd0b -->

<!-- START_e4b1c038cef3e5bbf06f5d11b70fee83 -->
## api/v1/translations/translation/{language}
> Example request:

```bash
curl -X GET \
    -G "http://api.oksgroup.uz/api/v1/translations/translation/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://api.oksgroup.uz/api/v1/translations/translation/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/v1/translations/translation/{language}`


<!-- END_e4b1c038cef3e5bbf06f5d11b70fee83 -->

<!-- START_cb10488f39df33f9ecdaf78061412724 -->
## api/v1/translations/translation/{language}
> Example request:

```bash
curl -X POST \
    "http://api.oksgroup.uz/api/v1/translations/translation/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://api.oksgroup.uz/api/v1/translations/translation/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/v1/translations/translation/{language}`


<!-- END_cb10488f39df33f9ecdaf78061412724 -->

<!-- START_164339e0e1113887df86d42b21046bdd -->
## api/v1/translations/{id:d+}
> Example request:

```bash
curl -X DELETE \
    "http://api.oksgroup.uz/api/v1/translations/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://api.oksgroup.uz/api/v1/translations/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/v1/translations/{id:d+}`


<!-- END_164339e0e1113887df86d42b21046bdd -->

<!-- START_56b41197ebd28a5defa525447e06ea99 -->
## api/v1/translations/translation
> Example request:

```bash
curl -X POST \
    "http://api.oksgroup.uz/api/v1/translations/translation" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://api.oksgroup.uz/api/v1/translations/translation"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/v1/translations/translation`


<!-- END_56b41197ebd28a5defa525447e06ea99 -->

<!-- START_ea94c0913f19e66371e9ea92fd5ac136 -->
## translations
> Example request:

```bash
curl -X GET \
    -G "http://api.oksgroup.uz/translations" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://api.oksgroup.uz/translations"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET translations`


<!-- END_ea94c0913f19e66371e9ea92fd5ac136 -->


