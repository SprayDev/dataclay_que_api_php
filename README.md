# DataClay QUE

## Возможности

- Создать задачу на рендер видео
- Получить все шаблоны

### Создание работы
endpoint метода - https://que-api.dataclay.com/api/v1/jobs
#### request headers:

| Header | Value |
| ------ | ------ |
| Content-Type | application/json |
| Authorization | Bearer $token |

#### POST DATA
| Key | Description |
| ------ | ------ |
| projectId | ID Компании в ЛК DataClay QUE |
| output | Имя файла после рендера, если не указано, то имя файла будет выбрано случайным образом |
| aep | Путь к файлу шаблона, если не указано значение, то берется шаблон, который стоит на компании по умолчанию |
| {layer-name} | имя динамического слоя |

Количество {layer-name} полей  может быть неограничено

#### Ответ
В случае успешного запроса, в ответе придет детальная информация о создание работы

```sh
{"createdJob":{"aep":"C:\\Users\\Administrator\\Desktop\\atabek-proj\\test-temp3\\Untitled Project.aep","output":"file_1623922945","render-status":"ready","target":"","_id":"60cb1902668ef671b9901ef2","_orgId":"60c7a94b668ef671b9901ed5","_projectId":"60c8216a668ef671b9901ed9","layer-txt":"Hello world!","layer-img":"https://png.pngtree.com/element_our/20190528/ourmid/pngtree-small-url-icon-opened-on-the-computer-image_1132275.jpg","bot":"60c7cae2668ef671b9901ed7","_createdAt":"2021-06-17T09:42:26.539Z","_updatedAt":"2021-06-17T09:42:26.539Z"},"updatedProject":{"_id":"60c8216a668ef671b9901ed9","_createdAt":"2021-06-15T03:41:30.159Z","_updatedAt":"2021-06-17T06:36:15.518Z","count":20,"name":"Test-proj"}}
```

### Получения списка всех шаблонов

endpoint метода: https://que-api.dataclay.com/api/v1/templates

Данный метод возвращает список всех шаблонов созданные через пользователя личного кабинета DataClay QUE

#### request headers:

| Header | Value |
| ------ | ------ |
| Content-Type | application/json |
| Authorization | Bearer $token |

#### Тип запроса GET

#### Ответ
В ответе передается список всех шаблонов с описанием окружения в котором они созданы, с именем компьютера на котором создали и список динамических полей

```sh
[{"env":{"fonts":["Montserrat-Black","Montserrat-ExtraBold","Montserrat-Medium","Montserrat-Light","Montserrat-SemiBold","Montserrat-Bold","TimesNewRomanPSMT"],"effects":["Background Product 01 Color","Text 01 Color","Square 01 Color","Background Product 02 Color","Text 02 Color","Square 02 Color","Background Product 03 Color","Text 03 Color","Square 03 Color","Background Product 04 Color","Text 04 Color","Square 04 Color","Background Product 05 Color","Text 05 Color","Fill","CC Light Sweep","Gaussian Blur","CC Particle World","Gradient Ramp","Drop Shadow","Motion Tile","Transform","Templater Settings"],"author":"maximusluk@gmail.com","hostuser":"Administrator","hostmachine":"WIN-2V32QES64AV","filename":"Untitled%20Project2.aep","filepath":"C:\\Users\\Administrator\\Desktop\\atabek-proj\\pills.conv3 folder\\Untitled Project2.aep","name":"Untitled%20Project2.aep","version":"1.0","hostapp":{"name":"Adobe After Effects","version":"18.1x31","os":"Win"},"rigver":"3.0.0","rigbuild":12092},"_isEnabled":true,"_id":"60c84587668ef671b9901ee1","rig":{"text":[],"footage":[],"solid":[],"comp":[],"adj":[],"json":[]},"panel":{"footage":"","module":"","settings":"","start":null,"end":null,"output":"","prefix":"","version":null,"build":null},"_orgId":"60c7a94b668ef671b9901ed5","_createdAt":"2021-06-15T06:15:35.655Z","_updatedAt":"2021-06-15T06:15:35.655Z"},{"env":{"fonts":["TimesNewRomanPSMT"],"effects":["Templater Settings"],"author":"maximusluk@gmail.com","hostuser":"Administrator","hostmachine":"WIN-2V32QES64AV","filename":"Untitled%20Project.aep","filepath":"C:\\Users\\Administrator\\Desktop\\atabek-proj\\test-temp3\\Untitled Project.aep","name":"Untitled%20Project.aep","version":"1.0","hostapp":{"name":"Adobe After Effects","version":"18.1x31","os":"Win"},"rigver":"3.0.0","rigbuild":12092},"_isEnabled":true,"_id":"60c82bf7668ef671b9901eda","rig":{"text":[{"layer":{"name":"layer-txt","index":3,"constructor":"TextLayer","type":"text","containing_comp":{"name":"Comp 1","id":1},"layout":{"scale":0,"align":{"center":false,"edge":"none","padding":0,"anchor":false},"attach":{"target":null,"side":"none","center":false,"group":"none","padding":0}},"time":{"comp_starts_inpoint":false,"comp_ends_outpoint":false,"shift":{"target":null,"inpoint_to":"none","outpoint_to":"none","overlap":0},"trim":{"preserve_start":false,"preserve_end":false,"in":{"target":null,"to":"none","overlap":0},"out":{"target":null,"to":"none","overlap":0}},"stretch":{"target":null,"type":"none","overlap":0}},"font":"TimesNewRomanPSMT"}}],"footage":[{"layer":{"name":"layer-img","index":4,"constructor":"AVLayer","type":"footage","containing_comp":{"name":"Comp 1","id":1},"layout":{"scale":0,"align":{"center":false,"edge":"none","padding":0,"anchor":false},"attach":{"target":null,"side":"none","center":false,"group":"none","padding":0},"fit":"fill"},"time":{"comp_starts_inpoint":false,"comp_ends_outpoint":false,"shift":{"target":null,"inpoint_to":"none","outpoint_to":"none","overlap":0},"trim":{"preserve_start":false,"preserve_end":false,"in":{"target":null,"to":"none","overlap":0},"out":{"target":null,"to":"none","overlap":0}},"stretch":{"target":null,"type":"none","overlap":0}}}}],"solid":[],"comp":[],"adj":[],"json":[]},"panel":{"footage":"","module":"","settings":"","start":null,"end":null,"output":"","prefix":"","version":null,"build":null},"_orgId":"60c7a94b668ef671b9901ed5","_createdAt":"2021-06-15T04:26:31.110Z","_updatedAt":"2021-06-17T07:43:02.126Z"}]
```

# Видео пример
https://www.loom.com/share/df1889e3725648ddbd1b888e70fa9a2c
