# Generated by Django 3.2.5 on 2022-08-23 15:13

from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [
        ('base', '0010_media'),
    ]

    operations = [
        migrations.AddField(
            model_name='media',
            name='media_label',
            field=models.CharField(blank=True, max_length=124, null=True),
        ),
    ]
