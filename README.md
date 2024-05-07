# Получение информации о списке займов
```sh
GET /api/loans
```

Ответ
| Наименование | Тип | Описание |
| ------ | ------ | ------ |
| status_code | string | Код ответа сервера (пример - 200)
| response | array | Список займов
| response[0] | obj | Получение информации о конкретном займе
| response[0].id| int| ID займа
| response[0].person| string| ФИО заемщика
| response[0].total| int| Сумма займа
| response[0].created_at| int| Дата создания в формате UNIX time
| response[0].updated_at| int| Дата обновления в формате UNIX time

# Добавить займ
```sh
POST /api/loans
```

Параметры в теле Body
| Наименование | Обязтельный параметр | Тип | Описание |
| ------ | ------ | ------ | ------ |
|person| - | string | ФИО заемщика
|total| - | int| Сумма займа

Ответ
| Наименование | Тип | Описание |
| ------ | ------ | ------ |
| status_code | string | Код ответа сервера (пример - 200)
|response.id| int| ID займа
| response.person| string| ФИО заемщика
| response.total| int| Сумма займа
| response.created_at| int| Дата создания в формате UNIX time
| response.updated_at| int| Дата обновления в формате UNIX time

# Редактировать займ
```sh
PUT /api/loans/{id займа}
```

Параметры в теле Body
| Наименование | Обязтельный параметр | Тип | Описание |
| ------ | ------ | ------ | ------ |
|person| - | string | ФИО заемщика
|total| - | int| Сумма займа

Ответ
| Наименование | Тип | Описание |
| ------ | ------ | ------ |
| status_code | string | Код ответа сервера (пример - 200)
|response.id| int| ID займа
| response.person| string| ФИО заемщика
| response.total| int| Сумма займа
| response.created_at| int| Дата создания в формате UNIX time
| response.updated_at| int| Дата обновления в формате UNIX time

# Получить информацию о займе
```sh
GET /api/loans/{id займа}
```

Ответ
| Наименование | Тип | Описание |
| ------ | ------ | ------ |
| status_code | string | Код ответа сервера (пример - 200)
|response.id| int| ID займа
| response.person| string| ФИО заемщика
| response.total| int| Сумма займа
| response.created_at| int| Дата создания в формате UNIX time
| response.updated_at| int| Дата обновления в формате UNIX time

# Удалить займ
```sh
DELETE /api/loans/{id займа}
```

Ответ
| Наименование | Тип | Описание |
| ------ | ------ | ------ |
| status_code | string | Код ответа сервера (пример - 200)
