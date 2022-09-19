from django.contrib import admin

# Register your models here.
from .models import Packages, Carousels, Media, Articles, HealthInsurance

admin.site.register(Packages)
admin.site.register(Carousels)
admin.site.register(Media)
admin.site.register(Articles)
admin.site.register(HealthInsurance)
