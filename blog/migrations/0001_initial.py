# Generated by Django 2.0b1 on 2017-11-10 00:41

from django.conf import settings
from django.db import migrations, models


class Migration(migrations.Migration):

    initial = True

    dependencies = [
        migrations.swappable_dependency(settings.AUTH_USER_MODEL),
    ]

    operations = [
        migrations.CreateModel(
            name='BlogModel',
            fields=[
                ('ref_id', models.IntegerField(auto_created=True, default=1, primary_key=True, serialize=False)),
                ('title', models.CharField(max_length=1000)),
                ('body', models.TextField()),
                ('tags', models.CharField(max_length=10000)),
                ('meta_title', models.CharField(max_length=70)),
                ('meta_body', models.CharField(max_length=156)),
                ('code_injection_header', models.CharField(max_length=10000)),
                ('code_injection_footer', models.CharField(max_length=10000)),
                ('twitter_card_title', models.CharField(max_length=1000)),
                ('twitter_card_body', models.CharField(max_length=10000)),
                ('twitter_card_image', models.ImageField(blank=True, null=True, upload_to='')),
                ('facebook_card_title', models.CharField(max_length=1000)),
                ('facebook_card_body', models.CharField(max_length=10000)),
                ('facebook_card_image', models.ImageField(blank=True, null=True, upload_to='')),
                ('created', models.DateTimeField(auto_now=True)),
                ('author', models.ForeignKey(on_delete=None, related_name='blog_model', to=settings.AUTH_USER_MODEL)),
            ],
        ),
    ]
