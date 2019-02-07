# CRM REST Django

Basic REST Queries to a CRM using the Django Framework v1.11



## Getting Started
1. Activate the virtual environment
2. Install dependencies
3. Change create conf.cnf with your settings in the base dir. See DATABASES in webshop/settings.py
4. Server start


### Prerequisites

```
Python 3.6
Django==2.1.5
# djangorestframework==3.8.2
mysqlclient==1.4.1
django-mysql==2.4.1
```
see [requirements.txt](http://www.github.com/fingerman...) 

```python_django/settings.py```  contains your DB configuration.  
You can edit your DB connection settings from ```local.cnf```  
   

To start with the repo:
```bash  
git clone https://github.com/fingerman/softwareTechnologies.git
```
##### Python Django Demo Blog:
```
cd python-django/

venv\Scripts\activate
pip install -r requirements.txt
cd webshop
python manage.py runserver  

# apply migrations to the DB
python manage.py makemigrations
python manage.py migrate

```
 

## Acknowledgments

* [SoftUni Sofia](http://www.softuni.bg) - code snippets
