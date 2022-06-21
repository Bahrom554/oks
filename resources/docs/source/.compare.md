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


<!-- START_20fc6485509f59e13795c41b75c38754 -->
## Activity Get all

> Example request:

```bash
curl -X GET \
    -G "http://api.oksgroup.uz/api/v1/admin/activity" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://api.oksgroup.uz/api/v1/admin/activity"
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
`GET api/v1/admin/activity`


<!-- END_20fc6485509f59e13795c41b75c38754 -->

<!-- START_13b0c737c9246e0997d0ce15b177f6fc -->
## Activity create

> Example request:

```bash
curl -X POST \
    "http://api.oksgroup.uz/api/v1/admin/activity" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"created_at":"voluptatem","deleted_at":"sit","description":"porro","file_id":1,"id":"voluptatem","lang":7,"lang_hash":"aperiam","link":"rerum","sort":17,"status":19,"title":"maxime","type":18,"updated_at":"eveniet"}'

```

```javascript
const url = new URL(
    "http://api.oksgroup.uz/api/v1/admin/activity"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "created_at": "voluptatem",
    "deleted_at": "sit",
    "description": "porro",
    "file_id": 1,
    "id": "voluptatem",
    "lang": 7,
    "lang_hash": "aperiam",
    "link": "rerum",
    "sort": 17,
    "status": 19,
    "title": "maxime",
    "type": 18,
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
`POST api/v1/admin/activity`

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
    
<!-- END_13b0c737c9246e0997d0ce15b177f6fc -->

<!-- START_6089a467cbd0cf5c311cfddbd3e58696 -->
## Activity update

> Example request:

```bash
curl -X PUT \
    "http://api.oksgroup.uz/api/v1/admin/activity/1?id=rerum" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"created_at":"alias","deleted_at":"mollitia","description":"dolorem","file_id":10,"id":"aliquam","lang":11,"lang_hash":"maxime","link":"fugiat","sort":2,"status":6,"title":"voluptatibus","type":3,"updated_at":"consequatur"}'

```

```javascript
const url = new URL(
    "http://api.oksgroup.uz/api/v1/admin/activity/1"
);

let params = {
    "id": "rerum",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "created_at": "alias",
    "deleted_at": "mollitia",
    "description": "dolorem",
    "file_id": 10,
    "id": "aliquam",
    "lang": 11,
    "lang_hash": "maxime",
    "link": "fugiat",
    "sort": 2,
    "status": 6,
    "title": "voluptatibus",
    "type": 3,
    "updated_at": "consequatur"
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
`PUT api/v1/admin/activity/{id}`

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
    
<!-- END_6089a467cbd0cf5c311cfddbd3e58696 -->

<!-- START_5e41c8f04ed9d650e98f568e65ed13c1 -->
## Activity view

> Example request:

```bash
curl -X GET \
    -G "http://api.oksgroup.uz/api/v1/admin/activity/1?id=odit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://api.oksgroup.uz/api/v1/admin/activity/1"
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
`GET api/v1/admin/activity/{id}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `id` |  required  | ID

<!-- END_5e41c8f04ed9d650e98f568e65ed13c1 -->

<!-- START_cfafa0a5ac31489be1cab4d16088824b -->
## Activity delete

> Example request:

```bash
curl -X DELETE \
    "http://api.oksgroup.uz/api/v1/admin/activity/1?id=quibusdam" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://api.oksgroup.uz/api/v1/admin/activity/1"
);

let params = {
    "id": "quibusdam",
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
`DELETE api/v1/admin/activity/{id}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `id` |  required  | ID

<!-- END_cfafa0a5ac31489be1cab4d16088824b -->

<!-- START_0dccbfcca76e8566fa050f4f0d83fd64 -->
## Activity Get all

> Example request:

```bash
curl -X GET \
    -G "http://api.oksgroup.uz/api/v1/activity" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://api.oksgroup.uz/api/v1/activity"
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
`GET api/v1/activity`


<!-- END_0dccbfcca76e8566fa050f4f0d83fd64 -->

<!-- START_09b8cf21a403e7a778279bdbd8d83259 -->
## Activity view

> Example request:

```bash
curl -X GET \
    -G "http://api.oksgroup.uz/api/v1/activity/1?id=hic" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://api.oksgroup.uz/api/v1/activity/1"
);

let params = {
    "id": "hic",
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
`GET api/v1/activity/{id}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `id` |  required  | ID

<!-- END_09b8cf21a403e7a778279bdbd8d83259 -->

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
    -d '{"id":"ea","title":"magni","description":"in","link":"qui","type":13,"sort":18,"file_id":6,"lang":7,"lang_hash":"iste","status":6,"created_at":"ad","updated_at":"eligendi"}'

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
    "id": "ea",
    "title": "magni",
    "description": "in",
    "link": "qui",
    "type": 13,
    "sort": 18,
    "file_id": 6,
    "lang": 7,
    "lang_hash": "iste",
    "status": 6,
    "created_at": "ad",
    "updated_at": "eligendi"
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
    "http://api.oksgroup.uz/api/v1/admin/banners/1?id=eos" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"id":"id","title":"dolores","description":"porro","link":"ut","type":15,"sort":13,"file_id":9,"lang":5,"lang_hash":"sunt","status":14,"created_at":"non","updated_at":"sint"}'

```

```javascript
const url = new URL(
    "http://api.oksgroup.uz/api/v1/admin/banners/1"
);

let params = {
    "id": "eos",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "id": "id",
    "title": "dolores",
    "description": "porro",
    "link": "ut",
    "type": 15,
    "sort": 13,
    "file_id": 9,
    "lang": 5,
    "lang_hash": "sunt",
    "status": 14,
    "created_at": "non",
    "updated_at": "sint"
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
    -G "http://api.oksgroup.uz/api/v1/admin/banners/1?id=enim" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://api.oksgroup.uz/api/v1/admin/banners/1"
);

let params = {
    "id": "enim",
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
    "http://api.oksgroup.uz/api/v1/admin/banners/1?id=sint" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://api.oksgroup.uz/api/v1/admin/banners/1"
);

let params = {
    "id": "sint",
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
    -G "http://api.oksgroup.uz/api/v1/banners/1?id=vel" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://api.oksgroup.uz/api/v1/banners/1"
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

#Document


<!-- START_cfb5dd02966119cbcc4708bb07cceac1 -->
## Document Get all

> Example request:

```bash
curl -X GET \
    -G "http://api.oksgroup.uz/api/v1/admin/documents" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://api.oksgroup.uz/api/v1/admin/documents"
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
`GET api/v1/admin/documents`


<!-- END_cfb5dd02966119cbcc4708bb07cceac1 -->

<!-- START_2e105ec0978007e464092f4edecf5caa -->
## Document create

> Example request:

```bash
curl -X POST \
    "http://api.oksgroup.uz/api/v1/admin/documents" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"created_at":"non","deleted_at":"eveniet","description":"repudiandae","file_id":14,"id":"et","lang":12,"lang_hash":"at","sort":20,"status":11,"title":"facilis","type":5,"updated_at":"adipisci"}'

```

```javascript
const url = new URL(
    "http://api.oksgroup.uz/api/v1/admin/documents"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "created_at": "non",
    "deleted_at": "eveniet",
    "description": "repudiandae",
    "file_id": 14,
    "id": "et",
    "lang": 12,
    "lang_hash": "at",
    "sort": 20,
    "status": 11,
    "title": "facilis",
    "type": 5,
    "updated_at": "adipisci"
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
`POST api/v1/admin/documents`

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
        `sort` | integer |  optional  | no-required sort
        `status` | integer |  optional  | no-required status
        `title` | string |  optional  | no-required title
        `type` | integer |  optional  | no-required type
        `updated_at` | datetime |  optional  | no-required updated_at
    
<!-- END_2e105ec0978007e464092f4edecf5caa -->

<!-- START_0784bf0842f27599c9837f8bd13d6b50 -->
## Document update

> Example request:

```bash
curl -X PUT \
    "http://api.oksgroup.uz/api/v1/admin/documents/1?id=officiis" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"created_at":"aspernatur","deleted_at":"et","description":"deserunt","file_id":12,"id":"sint","lang":16,"lang_hash":"accusamus","sort":14,"status":3,"title":"fugit","type":20,"updated_at":"omnis"}'

```

```javascript
const url = new URL(
    "http://api.oksgroup.uz/api/v1/admin/documents/1"
);

let params = {
    "id": "officiis",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "created_at": "aspernatur",
    "deleted_at": "et",
    "description": "deserunt",
    "file_id": 12,
    "id": "sint",
    "lang": 16,
    "lang_hash": "accusamus",
    "sort": 14,
    "status": 3,
    "title": "fugit",
    "type": 20,
    "updated_at": "omnis"
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
`PUT api/v1/admin/documents/{id}`

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
        `sort` | integer |  optional  | no-required sort
        `status` | integer |  optional  | no-required status
        `title` | string |  optional  | no-required title
        `type` | integer |  optional  | no-required type
        `updated_at` | datetime |  optional  | no-required updated_at
    
<!-- END_0784bf0842f27599c9837f8bd13d6b50 -->

<!-- START_c41f8a7b4188b305e328aaeab37fc2de -->
## Document view

> Example request:

```bash
curl -X GET \
    -G "http://api.oksgroup.uz/api/v1/admin/documents/1?id=quisquam" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://api.oksgroup.uz/api/v1/admin/documents/1"
);

let params = {
    "id": "quisquam",
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
`GET api/v1/admin/documents/{id}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `id` |  required  | ID

<!-- END_c41f8a7b4188b305e328aaeab37fc2de -->

<!-- START_157aa135b2347b26366d46308f882481 -->
## Document delete

> Example request:

```bash
curl -X DELETE \
    "http://api.oksgroup.uz/api/v1/admin/documents/1?id=dolor" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://api.oksgroup.uz/api/v1/admin/documents/1"
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
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/v1/admin/documents/{id}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `id` |  required  | ID

<!-- END_157aa135b2347b26366d46308f882481 -->

<!-- START_f9f46754ae9a48ce4e10a68541a0704e -->
## Document Get all

> Example request:

```bash
curl -X GET \
    -G "http://api.oksgroup.uz/api/v1/documents" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://api.oksgroup.uz/api/v1/documents"
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
`GET api/v1/documents`


<!-- END_f9f46754ae9a48ce4e10a68541a0704e -->

<!-- START_05fbb9368027b9755fb85930c94d1a97 -->
## Document view

> Example request:

```bash
curl -X GET \
    -G "http://api.oksgroup.uz/api/v1/documents/1?id=non" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://api.oksgroup.uz/api/v1/documents/1"
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
    "created_at": "datetime",
    "deleted_at": "datetime",
    "description": "string",
    "file_id": "integer",
    "id": "bigint",
    "lang": "integer",
    "lang_hash": "string",
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
`GET api/v1/documents/{id}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `id` |  required  | ID

<!-- END_05fbb9368027b9755fb85930c94d1a97 -->

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
    -d '{"id":"libero","name":"incidunt","phone":"magnam","message":"dolore","services":"sit","email":"dolores","files":"autem","type":2,"address":"ut","status":10,"drink":18,"deleted_at":"cumque","created_at":"nisi","updated_at":"vel"}'

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
    "id": "libero",
    "name": "incidunt",
    "phone": "magnam",
    "message": "dolore",
    "services": "sit",
    "email": "dolores",
    "files": "autem",
    "type": 2,
    "address": "ut",
    "status": 10,
    "drink": 18,
    "deleted_at": "cumque",
    "created_at": "nisi",
    "updated_at": "vel"
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
    "http://api.oksgroup.uz/api/v1/admin/feedback/1?id=excepturi" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"id":"earum","name":"labore","phone":"possimus","message":"laborum","services":"aut","email":"consequatur","files":"quis","type":16,"address":"voluptas","status":13,"drink":9,"deleted_at":"aut","created_at":"animi","updated_at":"atque"}'

```

```javascript
const url = new URL(
    "http://api.oksgroup.uz/api/v1/admin/feedback/1"
);

let params = {
    "id": "excepturi",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "id": "earum",
    "name": "labore",
    "phone": "possimus",
    "message": "laborum",
    "services": "aut",
    "email": "consequatur",
    "files": "quis",
    "type": 16,
    "address": "voluptas",
    "status": 13,
    "drink": 9,
    "deleted_at": "aut",
    "created_at": "animi",
    "updated_at": "atque"
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
    -G "http://api.oksgroup.uz/api/v1/admin/feedback/1?id=accusantium" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://api.oksgroup.uz/api/v1/admin/feedback/1"
);

let params = {
    "id": "accusantium",
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
    "http://api.oksgroup.uz/api/v1/admin/feedback/1?id=repellat" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://api.oksgroup.uz/api/v1/admin/feedback/1"
);

let params = {
    "id": "repellat",
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
    "http://api.oksgroup.uz/api/v1/feedback/1?id=recusandae" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"id":"est","name":"magnam","phone":"amet","message":"laborum","services":"est","email":"esse","files":"est","type":18,"address":"esse","status":16,"drink":3,"deleted_at":"tenetur","created_at":"dolores","updated_at":"laborum"}'

```

```javascript
const url = new URL(
    "http://api.oksgroup.uz/api/v1/feedback/1"
);

let params = {
    "id": "recusandae",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "id": "est",
    "name": "magnam",
    "phone": "amet",
    "message": "laborum",
    "services": "est",
    "email": "esse",
    "files": "est",
    "type": 18,
    "address": "esse",
    "status": 16,
    "drink": 3,
    "deleted_at": "tenetur",
    "created_at": "dolores",
    "updated_at": "laborum"
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
    -G "http://api.oksgroup.uz/api/v1/feedback/1?id=et" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://api.oksgroup.uz/api/v1/feedback/1"
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
    -d '{"id":"et","name":"veniam","phone":"corrupti","message":"molestiae","services":"sed","email":"sed","files":"deleniti","type":13,"address":"dolore","status":16,"drink":9,"deleted_at":"ullam","created_at":"enim","updated_at":"vero"}'

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
    "id": "et",
    "name": "veniam",
    "phone": "corrupti",
    "message": "molestiae",
    "services": "sed",
    "email": "sed",
    "files": "deleniti",
    "type": 13,
    "address": "dolore",
    "status": 16,
    "drink": 9,
    "deleted_at": "ullam",
    "created_at": "enim",
    "updated_at": "vero"
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
    -d '{"files":"dolores"}'

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
    "files": "dolores"
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
    -d '{"id":"praesentium","title":"alias","alias":"voluptas","type":19,"lang":17,"lang_hash":"voluptatem","status":14,"deleted_at":"accusantium","created_at":"dolorem","updated_at":"laborum"}'

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
    "id": "praesentium",
    "title": "alias",
    "alias": "voluptas",
    "type": 19,
    "lang": 17,
    "lang_hash": "voluptatem",
    "status": 14,
    "deleted_at": "accusantium",
    "created_at": "dolorem",
    "updated_at": "laborum"
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
    "http://api.oksgroup.uz/api/v1/admin/menus/1?id=inventore" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"id":"doloremque","title":"explicabo","alias":"exercitationem","type":19,"lang":10,"lang_hash":"eius","status":1,"deleted_at":"porro","created_at":"atque","updated_at":"quas"}'

```

```javascript
const url = new URL(
    "http://api.oksgroup.uz/api/v1/admin/menus/1"
);

let params = {
    "id": "inventore",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "id": "doloremque",
    "title": "explicabo",
    "alias": "exercitationem",
    "type": 19,
    "lang": 10,
    "lang_hash": "eius",
    "status": 1,
    "deleted_at": "porro",
    "created_at": "atque",
    "updated_at": "quas"
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
    -G "http://api.oksgroup.uz/api/v1/admin/menus/1?id=ut" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://api.oksgroup.uz/api/v1/admin/menus/1"
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
    -G "http://api.oksgroup.uz/api/v1/menus/1?id=suscipit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://api.oksgroup.uz/api/v1/menus/1"
);

let params = {
    "id": "suscipit",
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
    "http://api.oksgroup.uz/api/v1/admin/menu-items/1?id=eum" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://api.oksgroup.uz/api/v1/admin/menu-items/1"
);

let params = {
    "id": "eum",
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
    -G "http://api.oksgroup.uz/api/v1/admin/menu-items/1?id=quidem" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://api.oksgroup.uz/api/v1/admin/menu-items/1"
);

let params = {
    "id": "quidem",
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
    "http://api.oksgroup.uz/api/v1/admin/menu-items/1?id=est" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://api.oksgroup.uz/api/v1/admin/menu-items/1"
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
    -G "http://api.oksgroup.uz/api/v1/menu-items/1?id=illo" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://api.oksgroup.uz/api/v1/menu-items/1"
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
    -d '{"id":"numquam","title":"veniam","slug":"dolor","description":"eos","type":11,"file_id":13,"documents":"alias","anons":"velit","content":"sunt","created_at":"eum","updated_at":"nihil","lang":3,"lang_hash":"ad","status":14,"deleted_at":"ipsam"}'

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
    "id": "numquam",
    "title": "veniam",
    "slug": "dolor",
    "description": "eos",
    "type": 11,
    "file_id": 13,
    "documents": "alias",
    "anons": "velit",
    "content": "sunt",
    "created_at": "eum",
    "updated_at": "nihil",
    "lang": 3,
    "lang_hash": "ad",
    "status": 14,
    "deleted_at": "ipsam"
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
    "http://api.oksgroup.uz/api/v1/admin/page/1?id=dicta" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"id":"sint","title":"dolor","slug":"ut","description":"fugit","type":12,"file_id":13,"documents":"id","anons":"rem","content":"sint","created_at":"qui","updated_at":"natus","lang":9,"lang_hash":"maxime","status":9,"deleted_at":"id"}'

```

```javascript
const url = new URL(
    "http://api.oksgroup.uz/api/v1/admin/page/1"
);

let params = {
    "id": "dicta",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "id": "sint",
    "title": "dolor",
    "slug": "ut",
    "description": "fugit",
    "type": 12,
    "file_id": 13,
    "documents": "id",
    "anons": "rem",
    "content": "sint",
    "created_at": "qui",
    "updated_at": "natus",
    "lang": 9,
    "lang_hash": "maxime",
    "status": 9,
    "deleted_at": "id"
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
    -G "http://api.oksgroup.uz/api/v1/admin/page/1?id=vitae" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://api.oksgroup.uz/api/v1/admin/page/1"
);

let params = {
    "id": "vitae",
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
    "http://api.oksgroup.uz/api/v1/admin/page/1?id=eveniet" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://api.oksgroup.uz/api/v1/admin/page/1"
);

let params = {
    "id": "eveniet",
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
    -G "http://api.oksgroup.uz/api/v1/page/1?id=sed" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://api.oksgroup.uz/api/v1/page/1"
);

let params = {
    "id": "sed",
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
    -d '{"id":"error","link":"perferendis","sort":9,"lang":2,"lang_hash":"cumque","status":18,"file_id":20,"deleted_at":"sed","created_at":"porro","updated_at":"aut"}'

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
    "id": "error",
    "link": "perferendis",
    "sort": 9,
    "lang": 2,
    "lang_hash": "cumque",
    "status": 18,
    "file_id": 20,
    "deleted_at": "sed",
    "created_at": "porro",
    "updated_at": "aut"
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
    -d '{"id":"officiis","link":"quia","sort":5,"lang":19,"lang_hash":"animi","status":19,"file_id":19,"deleted_at":"non","created_at":"blanditiis","updated_at":"optio"}'

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
    "id": "officiis",
    "link": "quia",
    "sort": 5,
    "lang": 19,
    "lang_hash": "animi",
    "status": 19,
    "file_id": 19,
    "deleted_at": "non",
    "created_at": "blanditiis",
    "updated_at": "optio"
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
    -G "http://api.oksgroup.uz/api/v1/admin/partner/1?id=quidem" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://api.oksgroup.uz/api/v1/admin/partner/1"
);

let params = {
    "id": "quidem",
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
    "http://api.oksgroup.uz/api/v1/admin/partner/1?id=dignissimos" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://api.oksgroup.uz/api/v1/admin/partner/1"
);

let params = {
    "id": "dignissimos",
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
    -G "http://api.oksgroup.uz/api/v1/partner/1?id=illum" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://api.oksgroup.uz/api/v1/partner/1"
);

let params = {
    "id": "illum",
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
    -d '{"id":"sapiente","title":"sint","description":"ut","content":"modi","slug":"et","top":2,"popular":9,"type":17,"file_id":12,"documents":"quidem","video":"adipisci","photo_author":"eligendi","published_at":"numquam","created_at":"rerum","updated_at":"qui","lang":6,"lang_hash":"ut","status":15,"deleted_at":"eum"}'

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
    "id": "sapiente",
    "title": "sint",
    "description": "ut",
    "content": "modi",
    "slug": "et",
    "top": 2,
    "popular": 9,
    "type": 17,
    "file_id": 12,
    "documents": "quidem",
    "video": "adipisci",
    "photo_author": "eligendi",
    "published_at": "numquam",
    "created_at": "rerum",
    "updated_at": "qui",
    "lang": 6,
    "lang_hash": "ut",
    "status": 15,
    "deleted_at": "eum"
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
    "http://api.oksgroup.uz/api/v1/admin/post/1?id=nesciunt" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"id":"similique","title":"in","description":"voluptatem","content":"libero","slug":"est","top":20,"popular":16,"type":8,"file_id":14,"documents":"quia","video":"ipsa","photo_author":"rerum","published_at":"atque","created_at":"eveniet","updated_at":"saepe","lang":12,"lang_hash":"enim","status":4,"deleted_at":"voluptatem"}'

```

```javascript
const url = new URL(
    "http://api.oksgroup.uz/api/v1/admin/post/1"
);

let params = {
    "id": "nesciunt",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "id": "similique",
    "title": "in",
    "description": "voluptatem",
    "content": "libero",
    "slug": "est",
    "top": 20,
    "popular": 16,
    "type": 8,
    "file_id": 14,
    "documents": "quia",
    "video": "ipsa",
    "photo_author": "rerum",
    "published_at": "atque",
    "created_at": "eveniet",
    "updated_at": "saepe",
    "lang": 12,
    "lang_hash": "enim",
    "status": 4,
    "deleted_at": "voluptatem"
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
    -G "http://api.oksgroup.uz/api/v1/admin/post/1?id=minima" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://api.oksgroup.uz/api/v1/admin/post/1"
);

let params = {
    "id": "minima",
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
    "http://api.oksgroup.uz/api/v1/admin/post/1?id=similique" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://api.oksgroup.uz/api/v1/admin/post/1"
);

let params = {
    "id": "similique",
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
    -G "http://api.oksgroup.uz/api/v1/post/1?id=voluptates" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://api.oksgroup.uz/api/v1/post/1"
);

let params = {
    "id": "voluptates",
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
    -d '{"id":"dolore","name":"aut","value":"nihil","file_id":19,"slug":"sint","link":"quaerat","alias":"id","lang_hash":"rerum","sort":1,"lang":4,"status":1,"deleted_at":"sit","created_at":"corporis","updated_at":"facilis"}'

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
    "id": "dolore",
    "name": "aut",
    "value": "nihil",
    "file_id": 19,
    "slug": "sint",
    "link": "quaerat",
    "alias": "id",
    "lang_hash": "rerum",
    "sort": 1,
    "lang": 4,
    "status": 1,
    "deleted_at": "sit",
    "created_at": "corporis",
    "updated_at": "facilis"
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
    "http://api.oksgroup.uz/api/v1/admin/settings/1?id=nobis" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"id":"nesciunt","name":"dicta","value":"earum","file_id":20,"slug":"molestias","link":"veritatis","alias":"dolor","lang_hash":"maiores","sort":6,"lang":19,"status":6,"deleted_at":"quo","created_at":"consequatur","updated_at":"nemo"}'

```

```javascript
const url = new URL(
    "http://api.oksgroup.uz/api/v1/admin/settings/1"
);

let params = {
    "id": "nobis",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "id": "nesciunt",
    "name": "dicta",
    "value": "earum",
    "file_id": 20,
    "slug": "molestias",
    "link": "veritatis",
    "alias": "dolor",
    "lang_hash": "maiores",
    "sort": 6,
    "lang": 19,
    "status": 6,
    "deleted_at": "quo",
    "created_at": "consequatur",
    "updated_at": "nemo"
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
    -G "http://api.oksgroup.uz/api/v1/admin/settings/1?id=quo" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://api.oksgroup.uz/api/v1/admin/settings/1"
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
    "http://api.oksgroup.uz/api/v1/admin/settings/1?id=omnis" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://api.oksgroup.uz/api/v1/admin/settings/1"
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
    -G "http://api.oksgroup.uz/api/v1/settings/1?id=incidunt" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://api.oksgroup.uz/api/v1/settings/1"
);

let params = {
    "id": "incidunt",
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
    "created_at": "datetime",
    "eur": "integer",
    "id": "bigint",
    "lang": "integer",
    "lang_hash": "string",
    "rub": "integer",
    "type": "integer",
    "updated_at": "datetime",
    "uran": "integer",
    "usd": "integer",
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
    -d '{"created_at":"aliquam","eur":8,"id":"sit","lang":4,"lang_hash":"alias","rub":5,"type":4,"updated_at":"enim","uran":15,"usd":16}'

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
    "created_at": "aliquam",
    "eur": 8,
    "id": "sit",
    "lang": 4,
    "lang_hash": "alias",
    "rub": 5,
    "type": 4,
    "updated_at": "enim",
    "uran": 15,
    "usd": 16
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
    `created_at` | datetime |  optional  | no-required created_at
        `eur` | integer |  optional  | no-required eur
        `id` | bigint |  optional  | no-required id
        `lang` | integer |  optional  | no-required lang
        `lang_hash` | string |  optional  | no-required lang_hash
        `rub` | integer |  optional  | no-required rub
        `type` | integer |  optional  | no-required type
        `updated_at` | datetime |  optional  | no-required updated_at
        `uran` | integer |  optional  | no-required uran
        `usd` | integer |  optional  | no-required usd
    
<!-- END_9094552e6d9d9a4dfa922e637a2cd1af -->

<!-- START_06cae353f723060e3c426dbcfe5ad2e3 -->
## Statistic update

> Example request:

```bash
curl -X PUT \
    "http://api.oksgroup.uz/api/v1/admin/statistics/1?id=aut" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"created_at":"tempore","eur":2,"id":"cum","lang":14,"lang_hash":"facilis","rub":4,"type":17,"updated_at":"nemo","uran":14,"usd":7}'

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

let body = {
    "created_at": "tempore",
    "eur": 2,
    "id": "cum",
    "lang": 14,
    "lang_hash": "facilis",
    "rub": 4,
    "type": 17,
    "updated_at": "nemo",
    "uran": 14,
    "usd": 7
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
    `created_at` | datetime |  optional  | no-required created_at
        `eur` | integer |  optional  | no-required eur
        `id` | bigint |  optional  | no-required id
        `lang` | integer |  optional  | no-required lang
        `lang_hash` | string |  optional  | no-required lang_hash
        `rub` | integer |  optional  | no-required rub
        `type` | integer |  optional  | no-required type
        `updated_at` | datetime |  optional  | no-required updated_at
        `uran` | integer |  optional  | no-required uran
        `usd` | integer |  optional  | no-required usd
    
<!-- END_06cae353f723060e3c426dbcfe5ad2e3 -->

<!-- START_13966b28b34ae1ab475c45d882898c80 -->
## Statistic view

> Example request:

```bash
curl -X GET \
    -G "http://api.oksgroup.uz/api/v1/admin/statistics/1?id=enim" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://api.oksgroup.uz/api/v1/admin/statistics/1"
);

let params = {
    "id": "enim",
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
    "eur": "integer",
    "id": "bigint",
    "lang": "integer",
    "lang_hash": "string",
    "rub": "integer",
    "type": "integer",
    "updated_at": "datetime",
    "uran": "integer",
    "usd": "integer",
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
    "http://api.oksgroup.uz/api/v1/admin/statistics/1?id=incidunt" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://api.oksgroup.uz/api/v1/admin/statistics/1"
);

let params = {
    "id": "incidunt",
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
    "created_at": "datetime",
    "eur": "integer",
    "id": "bigint",
    "lang": "integer",
    "lang_hash": "string",
    "rub": "integer",
    "type": "integer",
    "updated_at": "datetime",
    "uran": "integer",
    "usd": "integer",
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
    -G "http://api.oksgroup.uz/api/v1/statistics/1?id=non" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://api.oksgroup.uz/api/v1/statistics/1"
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
    "created_at": "datetime",
    "eur": "integer",
    "id": "bigint",
    "lang": "integer",
    "lang_hash": "string",
    "rub": "integer",
    "type": "integer",
    "updated_at": "datetime",
    "uran": "integer",
    "usd": "integer",
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


<!-- START_017b6f309f37cc73c483becd09697ec5 -->
## StatisticItem Get all

> Example request:

```bash
curl -X GET \
    -G "http://api.oksgroup.uz/api/v1/admin/statistic-item" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://api.oksgroup.uz/api/v1/admin/statistic-item"
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
    "comparedyear": "string",
    "created_at": "datetime",
    "data": "integer",
    "deleted_at": "datetime",
    "description": "string",
    "file_id": "integer",
    "id": "bigint",
    "olddata": "integer",
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
`GET api/v1/admin/statistic-item`


<!-- END_017b6f309f37cc73c483becd09697ec5 -->

<!-- START_5c242be3865a79c70f8bd48a1266759d -->
## StatisticItem create

> Example request:

```bash
curl -X POST \
    "http://api.oksgroup.uz/api/v1/admin/statistic-item" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"comparedyear":"et","created_at":"debitis","data":8,"deleted_at":"repudiandae","description":"dolore","file_id":16,"id":"ea","olddata":15,"parent_id":5,"secondary":"officiis","sort":13,"status":9,"title":"voluptatem","updated_at":"et"}'

```

```javascript
const url = new URL(
    "http://api.oksgroup.uz/api/v1/admin/statistic-item"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "comparedyear": "et",
    "created_at": "debitis",
    "data": 8,
    "deleted_at": "repudiandae",
    "description": "dolore",
    "file_id": 16,
    "id": "ea",
    "olddata": 15,
    "parent_id": 5,
    "secondary": "officiis",
    "sort": 13,
    "status": 9,
    "title": "voluptatem",
    "updated_at": "et"
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
`POST api/v1/admin/statistic-item`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `comparedyear` | string |  optional  | no-required comparedyear
        `created_at` | datetime |  optional  | no-required created_at
        `data` | integer |  optional  | no-required data
        `deleted_at` | datetime |  optional  | no-required deleted_at
        `description` | string |  optional  | no-required description
        `file_id` | integer |  optional  | no-required file_id
        `id` | bigint |  optional  | no-required id
        `olddata` | integer |  optional  | no-required olddata
        `parent_id` | integer |  optional  | no-required parent_id
        `secondary` | string |  optional  | no-required secondary
        `sort` | integer |  optional  | no-required sort
        `status` | integer |  optional  | no-required status
        `title` | string |  optional  | no-required title
        `updated_at` | datetime |  optional  | no-required updated_at
    
<!-- END_5c242be3865a79c70f8bd48a1266759d -->

<!-- START_9c07f1847e52b5d52a9621480d5a43af -->
## StatisticItem update

> Example request:

```bash
curl -X PUT \
    "http://api.oksgroup.uz/api/v1/admin/statistic-item/1?id=in" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"comparedyear":"maiores","created_at":"atque","data":16,"deleted_at":"modi","description":"non","file_id":11,"id":"sit","olddata":17,"parent_id":19,"secondary":"et","sort":4,"status":13,"title":"perferendis","updated_at":"corporis"}'

```

```javascript
const url = new URL(
    "http://api.oksgroup.uz/api/v1/admin/statistic-item/1"
);

let params = {
    "id": "in",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "comparedyear": "maiores",
    "created_at": "atque",
    "data": 16,
    "deleted_at": "modi",
    "description": "non",
    "file_id": 11,
    "id": "sit",
    "olddata": 17,
    "parent_id": 19,
    "secondary": "et",
    "sort": 4,
    "status": 13,
    "title": "perferendis",
    "updated_at": "corporis"
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
`PUT api/v1/admin/statistic-item/{id}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `id` |  required  | ID
#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `comparedyear` | string |  optional  | no-required comparedyear
        `created_at` | datetime |  optional  | no-required created_at
        `data` | integer |  optional  | no-required data
        `deleted_at` | datetime |  optional  | no-required deleted_at
        `description` | string |  optional  | no-required description
        `file_id` | integer |  optional  | no-required file_id
        `id` | bigint |  optional  | no-required id
        `olddata` | integer |  optional  | no-required olddata
        `parent_id` | integer |  optional  | no-required parent_id
        `secondary` | string |  optional  | no-required secondary
        `sort` | integer |  optional  | no-required sort
        `status` | integer |  optional  | no-required status
        `title` | string |  optional  | no-required title
        `updated_at` | datetime |  optional  | no-required updated_at
    
<!-- END_9c07f1847e52b5d52a9621480d5a43af -->

<!-- START_376ce7dca52a30b1f40afb92b3f56a18 -->
## StatisticItem view

> Example request:

```bash
curl -X GET \
    -G "http://api.oksgroup.uz/api/v1/admin/statistic-item/1?id=sit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://api.oksgroup.uz/api/v1/admin/statistic-item/1"
);

let params = {
    "id": "sit",
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
    "comparedyear": "string",
    "created_at": "datetime",
    "data": "integer",
    "deleted_at": "datetime",
    "description": "string",
    "file_id": "integer",
    "id": "bigint",
    "olddata": "integer",
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
`GET api/v1/admin/statistic-item/{id}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `id` |  required  | ID

<!-- END_376ce7dca52a30b1f40afb92b3f56a18 -->

<!-- START_2630ebaa7d129fa8130ea34a2a8d49bb -->
## StatisticItem delete

> Example request:

```bash
curl -X DELETE \
    "http://api.oksgroup.uz/api/v1/admin/statistic-item/1?id=quos" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://api.oksgroup.uz/api/v1/admin/statistic-item/1"
);

let params = {
    "id": "quos",
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
`DELETE api/v1/admin/statistic-item/{id}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `id` |  required  | ID

<!-- END_2630ebaa7d129fa8130ea34a2a8d49bb -->

<!-- START_85bf18a3332cf8f4650268ab1b641cf2 -->
## StatisticItem Get all

> Example request:

```bash
curl -X GET \
    -G "http://api.oksgroup.uz/api/v1/statistic-item" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://api.oksgroup.uz/api/v1/statistic-item"
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
    "comparedyear": "string",
    "created_at": "datetime",
    "data": "integer",
    "deleted_at": "datetime",
    "description": "string",
    "file_id": "integer",
    "id": "bigint",
    "olddata": "integer",
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
`GET api/v1/statistic-item`


<!-- END_85bf18a3332cf8f4650268ab1b641cf2 -->

<!-- START_3754cd45b1040f7d727c08659d7c485c -->
## StatisticItem view

> Example request:

```bash
curl -X GET \
    -G "http://api.oksgroup.uz/api/v1/statistic-item/1?id=aliquam" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://api.oksgroup.uz/api/v1/statistic-item/1"
);

let params = {
    "id": "aliquam",
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
    "comparedyear": "string",
    "created_at": "datetime",
    "data": "integer",
    "deleted_at": "datetime",
    "description": "string",
    "file_id": "integer",
    "id": "bigint",
    "olddata": "integer",
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
`GET api/v1/statistic-item/{id}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `id` |  required  | ID

<!-- END_3754cd45b1040f7d727c08659d7c485c -->

#User


<!-- START_a10aa585c982194fd4c4619b3a25f98d -->
## User sign-in

> Example request:

```bash
curl -X POST \
    "http://api.oksgroup.uz/api/v1/admin/user/sign-in" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"corporis","password":"similique"}'

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
    "name": "corporis",
    "password": "similique"
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
    -G "http://api.oksgroup.uz/api/v1/admin/user/get-me?token=consequuntur" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://api.oksgroup.uz/api/v1/admin/user/get-me"
);

let params = {
    "token": "consequuntur",
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


