# Generated by Django 3.2.5 on 2022-07-11 09:39

from django.db import migrations


class Migration(migrations.Migration):

    dependencies = [
        ('base', '0001_initial'),
    ]

    operations = [
        migrations.RenameField(
            model_name='details',
            old_name='package_name',
            new_name='pkg_name',
        ),
    ]