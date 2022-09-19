from contextlib import nullcontext
from django.db import models
from embed_video.fields import EmbedVideoField

# Create your models here.
class Packages(models.Model):
    package_name = models.CharField(max_length=124)
    details = models.TextField()
    package_name_ar = models.CharField(max_length=124)
    details_ar = models.TextField()
    image = models.ImageField()

    def details_as_list(self):
        return self.details.split(', ')
    
    def __str__(self):
        return (self.package_name) 


class Carousels(models.Model):
    carousel_label = models.CharField(max_length=124,null=True, blank=True)
    carousel_content = models.TextField(null=True, blank=True)
    carousel_label_ar = models.CharField(max_length=124,null=True, blank=True)
    carousel_content_ar = models.TextField(null=True, blank=True)
    carousel_img= models.ImageField(null=True, blank=True)
    carousel_video= models.FileField(null=True, blank=True)
    def __str__(self):
        return (self.carousel_label) 


class Media(models.Model):  
    media_label = models.CharField(max_length=124,null=True, blank=True)
    media_img= models.ImageField(null=True, blank=True)
    media_video= models.FileField(null=True, blank=True)

    def __str__(self):
        return str(self.media_label) 


class Articles(models.Model):  
    article_label = models.CharField(max_length=124,null=True, blank=True)
    article_content = models.TextField(null=True, blank=True)
    article_label_ar = models.CharField(max_length=124,null=True, blank=True)
    article_content_ar = models.TextField(null=True, blank=True)


    def __str__(self):
        return (self.article_label) 


class HealthInsurance(models.Model):  
    hi_name = models.CharField(max_length=124,null=True, blank=True)
    hi_nameAR = models.CharField(max_length=124,null=True, blank=True)
    hi_logo = models.ImageField(null=True, blank=True)


    def __str__(self):
        return (self.hi_name) 

