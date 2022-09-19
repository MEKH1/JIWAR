# Generated by Django 3.2.5 on 2022-07-26 20:06

from django.db import migrations, models
import django.utils.timezone


class Migration(migrations.Migration):

    dependencies = [
        ('base', '0003_auto_20220722_1546'),
    ]

    operations = [
        migrations.AddField(
            model_name='packages',
            name='details',
            field=models.TextField(default=0),
            preserve_default=False,
        ),
        migrations.AddField(
            model_name='packages',
            name='image',
            field=models.ImageField(default=django.utils.timezone.now, upload_to=''),
            preserve_default=False,
        ),
        migrations.DeleteModel(
            name='Details',
        ),
    ]